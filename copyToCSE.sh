#!/bin/bash

git commit -a -m "changes made"
git push
scp -r [!.]. diptesh@mars.cse.iitb.ac.in:~/public_html/.

