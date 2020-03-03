#5. What will be the output of the following Python code?

a=10
b=20
def change():
    global b
    a=45
    b=56
change()
print(a)
print(b)
