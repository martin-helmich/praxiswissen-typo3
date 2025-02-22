#!/usr/bin/python3

import sys

file = open(sys.argv[1], 'r')
lines = file.readlines()

if len(lines) >= 100:
    pattern = "%03d"
else:
    pattern = "%02d"

for i in range(len(lines)):
    lineno = pattern % (i+1)
    line = lines[i].rstrip()
    line = line.replace('\t', '  ')
    print("%s %s" % (lineno, line))
