cities = {'CA' : 'San Fransisco', 'MI' : 'Detroit', 'FL' : 'Jacsonville'}
cities['NY'] = 'New York'
cities['OR'] = 'Portland'

def find_city(themap, state):
    if state in themap:
        return themap[state]
    else:
        return "Not Found"

# ok pay attention!!

cities['_find'] = find_city

while True:
    print "State? (Enter to quit)",
    state = raw_input("> ")
    if not state: break

    #this line is the most important ever!study!
    print cities[state]
