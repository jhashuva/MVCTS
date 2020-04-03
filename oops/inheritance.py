class Employee:
    pay_raise=1.05
    def __init__(self,fname,lname,sal):
        self.fname=fname
        self.lname=lname
        self.sal=sal
        self.email=fname+'.'+lname+'@gmail.com'

    def full_name(self):
        return '{} {}'.format(self.fname,self.lname)

    def raise_pay(self):
        self.sal=int(self.sal*self.pay_raise)


class Developer(Employee):

    def __init__(self,fname,lname,sal,program_lang):
       Employee.__init__(self,fname,lname,sal)
       #super(fname,lname,sal)
       self.fname=fname
       self.lname=lname
       self.program_lang=program_lang
    
        

    
        
