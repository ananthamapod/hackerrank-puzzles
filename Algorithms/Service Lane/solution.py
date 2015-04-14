width = []
def largest_vehicle(i,j):
    vehicle = 3
    for m in range(i,j+1):
        if width[m] < vehicle:
            vehicle = width[m]
    return vehicle

str1 = str(raw_input())
str1_arr = str1.split(" ")
n = int(str1_arr[0])
t = int(str1_arr[1])
str2_arr = (raw_input()).split(" ")
for wid in str2_arr:
    width.append(int(wid))
while t != 0:
    str3_arr = (raw_input()).split(" ")
    i = int(str3_arr[0])
    j = int(str3_arr[1])
    print largest_vehicle(i,j)
    t-=1

