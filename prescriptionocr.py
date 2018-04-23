import cv2
import pytesseract
import numpy as np
import copy
import sys
import re

def uprint(*objects, sep=' ', end='\n', file=sys.stdout):
    enc = file.encoding
    if enc == 'UTF-8':
        print(*objects, sep=sep, end=end, file=file)
    else:
        f = lambda obj: str(obj).encode(enc, errors='backslashreplace').decode(enc)
        print(*map(f, objects), sep=sep, end=end, file=file)

image = cv2.imread("aaa.jpg", 0)
#image = np.rot90(image, 3)
text = pytesseract.image_to_string(image)

## extracting patient ID
p = "Patient ID : [^\n]*"
p2 = ": .*"
p3 = "[0-9A-Za-z]+"
l = re.findall(p, text)[0]
l = re.findall(p2, l)[0]
l = re.findall(p3, l)[0]
patient_id = l
## extracting doctor ID
p = "Doctor ID : [^\n]*"
p2 = ": .*"
p3 = "[0-9A-Za-z]+"
l = re.findall(p, text)[0]
l = re.findall(p2, l)[0]
l = re.findall(p3, l)[0]
doctor_id = l
## extracting symptoms
p = "Symptoms : [^\n]*"
p2 = ": .*"
p3 = "[0-9A-Za-z ]+"
l = re.findall(p, text)[0]
l = re.findall(p2, l)[0]
l = re.findall(p3, l)[0]
Symptoms = l
print(Symptoms)
## diagnosis
p = "Diagnosis : [^\n]*"
p2 = ": .*"
p3 = "[0-9A-Za-z ]+"
l = re.findall(p, text)[0]
l = re.findall(p2, l)[0]
l = re.findall(p3, l)[0]
diagnosis = l
print(diagnosis)
## Time
p = "Time : [^\n]*"
p2 = ": .*"
p3 = "[0-9A-Za-z: ]+"
l = re.findall(p, text)[0]
l = re.findall(p2, l)[0]
l = re.findall(p3, l)[0]
time = l
print(time)
## Presctiption	
p = "Prescription : [^\n]*"
p2 = ": .*"
p3 = "[0-9A-Za-z ,]+"
l = re.findall(p, text)[0]
l = re.findall(p2, l)[0]
l = re.findall(p3, l)[0]
prescription = l
print(prescription)


#cv2.imwrite("done.jpg", im)