import pytesseract
import numpy as np
import cv2
import copy
import sys
import re
import json

datadict = {}
def uprint(*objects, sep = ' ', end='\n', file=sys.stdout):
    enc = file.encoding
    if enc == 'UTF-8':
        print(*objects, sep=sep, end=end, file=file)
    else:
        f = lambda obj: str(obj).encode(enc, errors='backslashreplace').decode(enc)
        print(*map(f, objects), sep=sep, end=end, file=file)

image = cv2.imread("finalpic.png")
#image = np.rot90(image, 3)
text = pytesseract.image_to_string(image)
print(text)
## extracting patient ID
p = "PATIENT ID: [^\n]*"
p2 = ": .*"
p3 = "[0-9A-Za-z]+"
l = re.findall(p, text)[0]
l = re.findall(p2, l)[0]
l = re.findall(p3, l)[0]
patient_id = l
datadict['patient_id'] = patient_id
## extracting doctor ID
p = "DOCTOR ID: [^\n]*"
p2 = ": .*"
p3 = "[0-9A-Za-z]+"
l = re.findall(p, text)[0]
l = re.findall(p2, l)[0]
l = re.findall(p3, l)[0]
doctor_id = l
datadict['doctor_id'] = doctor_id
## diagnosis
p = "DIAGNOSIS: [^\n]*"
p2 = ": .*"
p3 = "[0-9A-Za-z ]+"
l = re.findall(p, text)[0]
l = re.findall(p2, l)[0]
l = re.findall(p3, l)[0]
diagnosis = l
datadict['diagnosis'] = diagnosis
## Presctiption	
p = "PRESCRIPTION: [^\n]*"
p2 = ": .*"
p3 = "[0-9A-Za-z ,]+"
l = re.findall(p, text)[0]
l = re.findall(p2, l)[0]
l = re.findall(p3, l)[0]
prescription = l
datadict['prescription'] = prescription

with open('/home/ashish/data.json', 'w') as fp:
    json.dump(datadict, fp)

#cv2.imwrite("done.jpg", im)