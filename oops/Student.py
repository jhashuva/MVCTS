class Student:
    def __init__(self,a):
        self.__a=a

    @property
    def a(self):
        return self.__a
    @a.setter
    def a(self,var):
        self.__a=var
        
