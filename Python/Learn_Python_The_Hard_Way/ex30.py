people = 30
cars = 40
buses = 15

if cars > people:
    print "We should take cars."

elif cars < people:
    print "We should not take the cars."

else:
    print "We can't decide"

if buses > cars:
    print "That's too many buses."

elif buses < cars:
    print "Maybe we could take the buses."

else:
    print "We still can't decide."

if cars > people and cars < buses:
    print "Lot of cars!"
else:
    print "lots of car!"

if people > buses:
    print "Alright, let's just take the buses."
else:
    print "fine, let's stay home then."