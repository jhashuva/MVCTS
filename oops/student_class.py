class student:
    cy=2020
    def __init__(self,roll_no,name,yob,mobile,course):
        self.roll_no=roll_no
        self.name=name
        self.yob=yob
        self.mobile=mobile
        self.__course=course
        self.cal_age()
        #self.age=yob-self.cy
        
    def cal_age(self):
        return self.cy-self.yob
    
    #__course=course

s1=student('17B80517','xavier',1992,9491668536,'cse')
s2=student('17B80518','John',1991,9491668537,'ece')

stdent_string1='17B80519-kiran-1998-9876543210-eee'
stdent_string2='17B80520-satish-1997-9123456789-ece'