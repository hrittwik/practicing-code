the_count = [1,2,3,4,5]
fruits = ['apples', 'oranges', 'pears', 'apricots']
change = [1 , 'pennies' , 2, 'dimes', 3, 'quarters']

# this firsr kind of for-loop goes through a ;ist
for number in the_count:
    print "This is count %s" %number

# same as above
for fruit in fruits:
    print "A fruit of type %s" % fruit

#also we can go through mixed lists too
#notice we have to go to use %r since we don't know what's in in
for i in change:
    print "I got %r" % i

#we can also build lists, first start with an empty oranges
elements = []

#then use the range function to do 0 to 5 counts
for i in range (0, 6):
    print "Adding %d to the lists." % i
    #append is a function that lists understand
    elements.append(i)

# now we can print them out too
for i in elements:
    print "Elements was: %d" % i
