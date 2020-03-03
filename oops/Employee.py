class Employee:
    increment=1.05
    count=0
    def __init__(self,first_name,last_name,pay):
        self.first_name=first_name
        self.last_name=last_name
        self.pay=pay
        self.full_name=first_name+'.'+last_name
        Employee.count+=1

    def pay_raise(self):
        return self.pay*Employee.increment

    @classmethod
    def get_mail(cls,full_name):
        return full_name+"@gmail.com"

    @staticmethod
    def is_odd(n):
        if n%2!=0:
            return True
        else:
            return False
