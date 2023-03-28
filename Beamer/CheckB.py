import os
import time

status = os.popen('/var/www/tplink-smartplug/tplink_smartplug.py -t 192.168.178.158 -c info').read()
aus = '"relay_state":0'
an = '"relay_state":1'
if aus in status:
    print("aus")
elif an in status:
    print("an")

    


