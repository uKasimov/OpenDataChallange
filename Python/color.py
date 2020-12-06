# Python code for Multiple Color Detection


import numpy as np
import cv2
import serial #Serial imported for Serial communication
import time #Required to use delay functions
import requests
import os
import datetime
# Capturing video through webcam
webcam = cv2.VideoCapture('http://192.168.137.38:8080/video')

ArduinoSerial = serial.Serial('com5', 9600) #Create Serial port object called arduinoSerialData
time.sleep(2) #wait for 2 secounds for the communication to get established

# print (ArduinoSerial.readline()) #read the serial data and print it as line
# Start a while loop
n=0
bol_red, bol_blue = 0,0
img = 0
while (1):
    n=n+1
    _, imageFrame = webcam.read()

    hsvFrame = cv2.cvtColor(imageFrame, cv2.COLOR_BGR2HSV)

    red_lower = np.array([136, 87, 111], np.uint8)
    red_upper = np.array([180, 255, 255], np.uint8)
    red_mask = cv2.inRange(hsvFrame, red_lower, red_upper)

    blue_lower = np.array([94, 80, 2], np.uint8)
    blue_upper = np.array([120, 255, 255], np.uint8)
    blue_mask = cv2.inRange(hsvFrame, blue_lower, blue_upper)

    kernal = np.ones((5, 5), "uint8")

    red_mask = cv2.dilate(red_mask, kernal)
    res_red = cv2.bitwise_and(imageFrame, imageFrame,
                              mask=red_mask)

    blue_mask = cv2.dilate(blue_mask, kernal)
    res_blue = cv2.bitwise_and(imageFrame, imageFrame,
                               mask=blue_mask)

    contours, hierarchy = cv2.findContours(red_mask,
                                           cv2.RETR_TREE,
                                           cv2.CHAIN_APPROX_SIMPLE)
    if n==25:
        n=0
        if img == 0 and bol_red and bol_blue:
            path = 'D:/OpenServer/domains/tlight.loc/web/uploads'
            imgName = datetime.datetime.today().strftime("%Y-%m-%d-%H.%M.%S")+'.jpg'
            cv2.imwrite(os.path.join(path, imgName), imageFrame)
            img = 1

        bol_red, bol_blue = 0, 0
        for pic, contour in enumerate(contours):
            area = cv2.contourArea(contour)
            bol_red = 1
            if (area > 300):
                x, y, w, h = cv2.boundingRect(contour)
                imageFrame = cv2.rectangle(imageFrame, (x, y),
                                           (x + w, y + h),
                                           (0, 0, 255), 2)

                cv2.putText(imageFrame, "Red Colour", (x, y),
                            cv2.FONT_HERSHEY_SIMPLEX, 1.0,
                            (0, 0, 255))

        contours, hierarchy = cv2.findContours(blue_mask,
                                               cv2.RETR_TREE,
                                               cv2.CHAIN_APPROX_SIMPLE)
        for pic, contour in enumerate(contours):
            area = cv2.contourArea(contour)
            bol_blue = 1
            if (area > 300):
                x, y, w, h = cv2.boundingRect(contour)
                imageFrame = cv2.rectangle(imageFrame, (x, y),
                                           (x + w, y + h),
                                           (255, 0, 0), 2)

                cv2.putText(imageFrame, "Blue Colour", (x, y),
                            cv2.FONT_HERSHEY_SIMPLEX,
                            1.0, (255, 0, 0))

        res = ArduinoSerial.read()
        if bol_blue == 0 or bol_red == 0:
            if res == b'1':
                img = 0
                response = requests.get("http://tlight.loc/admin/logs/create?img="+imgName)

        print(bol_blue, bol_red, res)

        if bol_blue and bol_red:
            ArduinoSerial.write(b'1')
        else:
            ArduinoSerial.write(b'0')


    cv2.imshow("Multiple Color Detection in Real-TIme", imageFrame)
    if cv2.waitKey(10) & 0xFF == ord('q'):
        cap.release()
        cv2.destroyAllWindows()
        break
