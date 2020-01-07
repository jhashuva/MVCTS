from collections import defaultdict
f=open('wof.txt','r')
f2=open('wof_s.txt','a')
a=defaultdict(int)
for line in f:
	b=line.split()
	for i in b:
		a[i]+=1

for key,value in a.items():
		f2.write('{}-{}\n'.format(key,value))

f.close()
f2.close()
