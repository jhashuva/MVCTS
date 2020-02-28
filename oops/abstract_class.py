# -*- coding: utf-8 -*-
"""
Created on Tue Feb 11 15:32:34 2020

@author: joshu
"""
from abc import ABC,abstractmethod

class Student(ABC):
    def __init__(self):
        pass
    @abstractmethod
    def get_roll(self):
        pass
    
    
class grad_stud(Student):
    def __init__(self):
        pass
    
    def get_roll():
        return "This is your roll number"

#s0=Student()
s1=grad_stud()
