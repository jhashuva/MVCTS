# -*- coding: utf-8 -*-
"""
Created on Mon Feb 10 15:05:45 2020

@author: joshu
"""
class student:
    std_str=''
    course=''
    count=0
    cy=2020

    def __init__(self,roll_no,name,mobile,gender,__yob):
        self.roll_no=roll_no
        self.name=name
        self.mobile=mobile
        self.gender=gender
        self.__yob=__yob
        
        student.count+=1
        
    def cal_age(self):
        return student.cy-self.yob
    
    @classmethod
    def set_course(cls,course):
        cls.course=course
        
    @classmethod
    def from_string(cls, std_str):
        roll_no,name,mobile,gender,yob=s4_string.split("-")
        return cls(roll_no,name,mobile,gender,yob)
      
    @staticmethod  #2nd way of declering static method
    def stat_method(cy):
        return cy
    
class gradStudent(student):
   # dept=''
    def __init__(self,roll_no,name,mobile,gender,dept,__yob):
        super().__init__(roll_no,name,mobile,gender,__yob)
        self.dept=dept
        
        
        
        
        
        
s4_string='17B81A05B1-kumar-1234567890-M-1999'

roll_no,name,mobile,gender,yob=s4_string.split("-")

s4=student(roll_no,name,mobile,gender,yob)
s5_string='17B81A05B2-kumari-1234567899-F-1998'
roll_no,name,mobile,gender,yob=s4_string.split("-")
s5=student(roll_no,name,mobile,gender,yob)

#s5=
s1=student('17B81A05A1','Uttam',9087654321,'M',1998)
s2=student('17B81A05A2','vijay',9087654322,'M',1997)
s3=student('17B81A05A3','ramya',9087654324,'F',1999)


student.stat_method=staticmethod(student.stat_method)
# __varname_ =

#obj._class__varname_