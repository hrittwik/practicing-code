i = 0
numbers = []

def Add_to_list(number):
    i = 0
    while i < number:
        print "At the top i is %d " % i
        numbers.append(i)
        i = i + 1
        print "numbers now: ", numbers
        print "At the bottom i is %d " % i

Add_to_list(7)

print "The numbers: "

for num in numbers:
    print num
