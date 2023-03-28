import os
import time

os.system('echo "* 0 IR 002\r" >/dev/ttyS0')
time.sleep(60)
os.system('/var/www/tplink-smartplug/tplink_smartplug.py -t 192.168.178.158 -c off')
