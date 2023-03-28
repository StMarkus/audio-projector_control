import os
import time

status = os.popen('/var/www/tplink-smartplug/tplink_smartplug.py -t 192.168.178.158 -c info').read()
aus = '"relay_state":0'
an = '"relay_state":1'
if aus in status:
    os.system('/var/www/tplink-smartplug/tplink_smartplug.py -t 192.168.178.158 -c on')
    time.sleep(5)
    os.system('echo "* 0 IR 001\r" >/dev/ttyS0')
elif an in status:
    os.system('echo "* 0 IR 002\r" >/dev/ttyS0')
    time.sleep(60)
