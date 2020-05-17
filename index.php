Authenticating with public key "Imported-Openssh-Key: C:\\Users\\M1032711\\Deps Course\\AWSNitinTest.pem"
     ┌────────────────────────────────────────────────────────────────────┐
     │                        • MobaXterm 20.2 •                          │
     │            (SSH client, X-server and networking tools)             │
     │                                                                    │
     │ ➤ SSH session to ubuntu@13.127.177.162                             │
     │   • SSH compression : ✔                                            │
     │   • SSH-browser     : ✔                                            │
     │   • X11-forwarding  : ✔  (remote display is forwarded through SSH) │
     │   • DISPLAY         : ✔  (automatically set on remote server)      │
     │                                                                    │
     │ ➤ For more info, ctrl+click on help or visit our website           │
     └────────────────────────────────────────────────────────────────────┘

Welcome to Ubuntu 18.04.4 LTS (GNU/Linux 4.15.0-1065-aws x86_64)

 * Documentation:  https://help.ubuntu.com
 * Management:     https://landscape.canonical.com
 * Support:        https://ubuntu.com/advantage

  System information as of Sun May 17 14:01:00 UTC 2020



The programs included with the Ubuntu system are free software;
the exact distribution terms for each program are described in the
individual files in /usr/share/doc/*/copyright.

Ubuntu comes with ABSOLUTELY NO WARRANTY, to the extent permitted by
applicable law.

/usr/bin/xauth:  file /home/ubuntu/.Xauthority does not exist
To run a command as administrator (user "root"), use "sudo <command>".
See "man sudo_root" for details.

ubuntu@ip-172-31-7-75:~$ sudo su
root@ip-172-31-7-75:/home/ubuntu#
root@ip-172-31-7-75:/home/ubuntu# apt update
Hit:1 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic InRelease
Get:2 http://security.ubuntu.com/ubuntu bionic-security InRelease [88.7 kB]
Get:3 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic-updates InRelease [
Get:4 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic-backports InRelease
Get:5 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic/universe amd64 PackkB]
Get:6 http://security.ubuntu.com/ubuntu bionic-security/main amd64 Packages [710
Get:7 http://security.ubuntu.com/ubuntu bionic-security/main Translation-en [226
Get:8 http://security.ubuntu.com/ubuntu bionic-security/restricted amd64 Package
Get:9 http://security.ubuntu.com/ubuntu bionic-security/restricted Translation-e
Get:10 http://security.ubuntu.com/ubuntu bionic-security/universe amd64 Packages
Get:11 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic/universe Translati kB]
Get:12 http://security.ubuntu.com/ubuntu bionic-security/universe Translation-en
Get:13 http://security.ubuntu.com/ubuntu bionic-security/multiverse amd64 Packag
Get:14 http://security.ubuntu.com/ubuntu bionic-security/multiverse Translation-
Get:15 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic/multiverse amd64 P1 kB]
Get:16 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic/multiverse Transla8 kB]
Get:17 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic-updates/main amd64933 kB]
Get:18 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic-updates/main Trans319 kB]
Get:19 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic-updates/restrictedages [50.1 kB]
Get:20 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic-updates/restrictedn-en [12.6 kB]
Get:21 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic-updates/universe aes [1068 kB]
Get:22 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic-updates/universe Ten [332 kB]
Get:23 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic-updates/multiverseages [15.5 kB]
Get:24 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic-updates/multiversen-en [6352 B]
Get:25 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic-backports/main amd [7516 B]
Get:26 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic-backports/main Tra [4764 B]
Get:27 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic-backports/universeages [7484 B]
Get:28 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic-backports/universen-en [4436 B]
Fetched 18.7 MB in 6s (3338 kB/s)
Reading package lists... Done
Building dependency tree
Reading state information... Done
39 packages can be upgraded. Run 'apt list --upgradable' to see them.
root@ip-172-31-7-75:/home/ubuntu# hostname jmaster
root@ip-172-31-7-75:/home/ubuntu# vi /etc/hostname
root@ip-172-31-7-75:/home/ubuntu# bash
root@jmaster:/home/ubuntu#
root@jmaster:/home/ubuntu# apt install openjdk-8-jdk
Reading package lists... Done
Building dependency tree
Reading state information... Done
The following additional packages will be installed:
  adwaita-icon-theme at-spi2-core ca-certificates-java fontconfig fontconfig-con
  fonts-dejavu-core fonts-dejavu-extra gtk-update-icon-cache hicolor-icon-theme
  humanity-icon-theme java-common libasound2 libasound2-data libasyncns0
  libatk-bridge2.0-0 libatk-wrapper-java libatk-wrapper-java-jni libatk1.0-0
  libatk1.0-data libatspi2.0-0 libavahi-client3 libavahi-common-data libavahi-co
  libcairo2 libcroco3 libcups2 libdatrie1 libdrm-amdgpu1 libdrm-intel1 libdrm-no
  libdrm-radeon1 libflac8 libfontconfig1 libfontenc1 libgail-common libgail18
  libgdk-pixbuf2.0-0 libgdk-pixbuf2.0-bin libgdk-pixbuf2.0-common libgif7 libgl1
  libgl1-mesa-dri libgl1-mesa-glx libglapi-mesa libglvnd0 libglx-mesa0 libglx0
  libgraphite2-3 libgtk2.0-0 libgtk2.0-bin libgtk2.0-common libharfbuzz0b libice
  libice6 libjbig0 libjpeg-turbo8 libjpeg8 liblcms2-2 libllvm9 libnspr4 libnss3
  libpango-1.0-0 libpangocairo-1.0-0 libpangoft2-1.0-0 libpciaccess0 libpcsclite
  libpixman-1-0 libpthread-stubs0-dev libpulse0 librsvg2-2 librsvg2-common libse
  libsm-dev libsm6 libsndfile1 libthai-data libthai0 libtiff5 libvorbis0a libvor
  libx11-dev libx11-doc libx11-xcb1 libxau-dev libxaw7 libxcb-dri2-0 libxcb-dri3
  libxcb-glx0 libxcb-present0 libxcb-render0 libxcb-shape0 libxcb-shm0 libxcb-sy
  libxcb1-dev libxcomposite1 libxcursor1 libxdamage1 libxdmcp-dev libxfixes3 lib
  libxi6 libxinerama1 libxmu6 libxpm4 libxrandr2 libxrender1 libxshmfence1 libxt
  libxt6 libxtst6 libxv1 libxxf86dga1 libxxf86vm1 openjdk-8-jdk-headless openjdk
  openjdk-8-jre-headless ubuntu-mono x11-common x11-utils x11proto-core-dev x11p
  xorg-sgml-doctools xtrans-dev
Suggested packages:
  default-jre libasound2-plugins alsa-utils cups-common gvfs libice-doc liblcms2
  pcscd pulseaudio librsvg2-bin lm-sensors libsm-doc libxcb-doc libxt-doc openjd
  openjdk-8-source visualvm icedtea-8-plugin libnss-mdns fonts-ipafont-gothic
  fonts-ipafont-mincho fonts-wqy-microhei fonts-wqy-zenhei fonts-indic mesa-util
The following NEW packages will be installed:
  adwaita-icon-theme at-spi2-core ca-certificates-java fontconfig fontconfig-con
  fonts-dejavu-core fonts-dejavu-extra gtk-update-icon-cache hicolor-icon-theme
  humanity-icon-theme java-common libasound2 libasound2-data libasyncns0
  libatk-bridge2.0-0 libatk-wrapper-java libatk-wrapper-java-jni libatk1.0-0
  libatk1.0-data libatspi2.0-0 libavahi-client3 libavahi-common-data libavahi-co
  libcairo2 libcroco3 libcups2 libdatrie1 libdrm-amdgpu1 libdrm-intel1 libdrm-no
  libdrm-radeon1 libflac8 libfontconfig1 libfontenc1 libgail-common libgail18
  libgdk-pixbuf2.0-0 libgdk-pixbuf2.0-bin libgdk-pixbuf2.0-common libgif7 libgl1
  libgl1-mesa-dri libgl1-mesa-glx libglapi-mesa libglvnd0 libglx-mesa0 libglx0
  libgraphite2-3 libgtk2.0-0 libgtk2.0-bin libgtk2.0-common libharfbuzz0b libice
  libice6 libjbig0 libjpeg-turbo8 libjpeg8 liblcms2-2 libllvm9 libnspr4 libnss3
  libpango-1.0-0 libpangocairo-1.0-0 libpangoft2-1.0-0 libpciaccess0 libpcsclite
  libpixman-1-0 libpthread-stubs0-dev libpulse0 librsvg2-2 librsvg2-common libse
  libsm-dev libsm6 libsndfile1 libthai-data libthai0 libtiff5 libvorbis0a libvor
  libx11-dev libx11-doc libx11-xcb1 libxau-dev libxaw7 libxcb-dri2-0 libxcb-dri3
  libxcb-glx0 libxcb-present0 libxcb-render0 libxcb-shape0 libxcb-shm0 libxcb-sy
  libxcb1-dev libxcomposite1 libxcursor1 libxdamage1 libxdmcp-dev libxfixes3 lib
  libxi6 libxinerama1 libxmu6 libxpm4 libxrandr2 libxrender1 libxshmfence1 libxt
  libxt6 libxtst6 libxv1 libxxf86dga1 libxxf86vm1 openjdk-8-jdk openjdk-8-jdk-he
  openjdk-8-jre openjdk-8-jre-headless ubuntu-mono x11-common x11-utils x11proto
  x11proto-dev xorg-sgml-doctools xtrans-dev
0 upgraded, 125 newly installed, 0 to remove and 39 not upgraded.
Need to get 81.7 MB of archives.
After this operation, 544 MB of additional disk space will be used.
Do you want to continue? [Y/n] y
Get:1 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic/main amd64 fonts-dell 2.37-1 [1041 kB]
Get:2 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic/main amd64 fontconfll 2.12.6-0ubuntu2 [55.8 kB]
Get:3 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic/main amd64 libfontc4 2.12.6-0ubuntu2 [137 kB]
Get:4 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic/main amd64 fontconf12.6-0ubuntu2 [169 kB]
Get:5 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic-updates/main amd64 bo8 amd64 1.5.2-0ubuntu5.18.04.3 [110 kB]
Get:6 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic/main amd64 libogg0 -1 [17.2 kB]
Get:7 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic-updates/main amd64 all 1:7.7+19ubuntu7.1 [22.5 kB]
Get:8 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic/main amd64 libice6 .9-2 [40.2 kB]
Get:9 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic/main amd64 libsm6 a2-1 [15.8 kB]
Get:10 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic/main amd64 libxren1:0.9.10-1 [18.7 kB]
Get:11 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic/main amd64 libxft22-1 [36.1 kB]
Get:12 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic/main amd64 libxine 2:1.1.3-1 [7908 B]
Get:13 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic/main amd64 libxxf8 2:1.1.4-1 [13.7 kB]
Get:14 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic/main amd64 libxxf81:1.1.4-1 [10.6 kB]
Get:15 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic/main amd64 hicolor all 0.17-2 [9976 B]
Get:16 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic/main amd64 libjpeg2ubuntu8 [2194 B]
Get:17 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic/main amd64 libjbig-3.1build1 [26.7 kB]
Get:18 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic-updates/main amd64md64 4.0.9-5ubuntu0.3 [153 kB]
Get:19 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic/main amd64 libgdk-ommon all 2.36.11-2 [4536 B]
Get:20 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic/main amd64 libgdk- amd64 2.36.11-2 [165 kB]
Get:21 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic-updates/main amd64-icon-cache amd64 3.22.30-1ubuntu4 [28.3 kB]
Get:22 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic/main amd64 libpixm4 0.34.0-2 [229 kB]
Get:23 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic-updates/main amd64der0 amd64 1.13-2~ubuntu18.04 [14.7 kB]
Get:24 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic-updates/main amd640 amd64 1.13-2~ubuntu18.04 [5600 B]
Get:25 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic-updates/main amd64amd64 1.15.10-2ubuntu0.1 [580 kB]
Get:26 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic/main amd64 libcroc6.12-2 [81.3 kB]
Get:27 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic/main amd64 libthai.1.27-2 [133 kB]
Get:28 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic/main amd64 libdatr.2.10-7 [17.8 kB]
Get:29 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic/main amd64 libthai.27-2 [18.0 kB]
Get:30 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic-updates/main amd64.0-0 amd64 1.40.14-1ubuntu0.1 [153 kB]
Get:31 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic/main amd64 libgrap64 1.3.11-2 [78.7 kB]
Get:32 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic/main amd64 libharf4 1.7.2-1ubuntu1 [232 kB]
Get:33 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic-updates/main amd642-1.0-0 amd64 1.40.14-1ubuntu0.1 [33.2 kB]
Get:34 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic-updates/main amd64iro-1.0-0 amd64 1.40.14-1ubuntu0.1 [20.8 kB]
Get:35 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic/main amd64 librsvg.40.20-2 [98.6 kB]
Get:36 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic/main amd64 librsvgd64 2.40.20-2 [5124 B]
Get:37 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic/main amd64 humanite all 0.6.15 [1250 kB]
Get:38 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic-updates/main amd64o all 16.10+18.04.20181005-0ubuntu1 [149 kB]
Get:39 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic/main amd64 adwaita all 3.28.0-1ubuntu1 [3306 kB]
Get:40 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic/main amd64 libatsp4 2.28.0-1 [59.6 kB]
Get:41 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic/main amd64 libxtst.2.3-1 [12.8 kB]
Get:42 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic/main amd64 at-spi2 2.28.0-1 [47.9 kB]
Get:43 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic-updates/main amd64n all 0.68ubuntu1~18.04.1 [14.5 kB]
Get:44 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic-updates/main amd64ommon-data amd64 0.7-3.1ubuntu1.2 [22.1 kB]
Get:45 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic-updates/main amd64ommon3 amd64 0.7-3.1ubuntu1.2 [21.6 kB]
Get:46 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic-updates/main amd64lient3 amd64 0.7-3.1ubuntu1.2 [25.2 kB]
Get:47 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic-updates/main amd64md64 2.2.7-1ubuntu2.8 [211 kB]
Get:48 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic-updates/main amd64 amd64 2.9-1ubuntu0.1 [139 kB]
Get:49 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic/main amd64 libnspr.18-1ubuntu1 [112 kB]
Get:50 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic-updates/main amd64d64 2:3.35-2ubuntu2.7 [1135 kB]
Get:51 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic/main amd64 libpcsc 1.8.23-1 [21.3 kB]
Get:52 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic/main amd64 libxi6 .9-1 [29.2 kB]
Get:53 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic-updates/universe ak-8-jre-headless amd64 8u252-b09-1~18.04 [27.5 MB]
Get:54 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic-updates/main amd64cates-java all 20180516ubuntu1~18.04.1 [12.2 kB]
Get:55 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic/main amd64 fonts-d all 2.37-1 [1953 kB]
Get:56 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic-updates/main amd64-data all 1.1.3-5ubuntu0.5 [38.7 kB]
Get:57 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic-updates/main amd64 amd64 1.1.3-5ubuntu0.5 [360 kB]
Get:58 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic/main amd64 libasyn0.8-6 [12.1 kB]
Get:59 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic/main amd64 libatk1 2.28.1-1 [2992 B]
Get:60 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic/main amd64 libatk12.28.1-1 [43.9 kB]
Get:61 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic/main amd64 libatk- amd64 2.26.2-1 [57.3 kB]
Get:62 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic/main amd64 libfont1:1.1.3-1 [13.9 kB]
Get:63 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic-updates/main amd64amd64 1.0.0-2ubuntu2.3 [47.0 kB]
Get:64 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic-updates/main amd64esa amd64 19.2.8-0ubuntu0~18.04.3 [26.5 kB]
Get:65 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic-updates/main amd641 amd64 2:1.6.4-3ubuntu0.2 [9376 B]
Get:66 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic-updates/main amd642-0 amd64 1.13-2~ubuntu18.04 [6920 B]
Get:67 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic-updates/main amd643-0 amd64 1.13-2~ubuntu18.04 [6568 B]
Get:68 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic-updates/main amd640 amd64 1.13-2~ubuntu18.04 [22.1 kB]
Get:69 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic-updates/main amd64sent0 amd64 1.13-2~ubuntu18.04 [5552 B]
Get:70 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic-updates/main amd64c1 amd64 1.13-2~ubuntu18.04 [8808 B]
Get:71 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic/main amd64 libxdam1:1.1.4-3 [6934 B]
Get:72 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic/main amd64 libxfix:5.0.3-1 [10.8 kB]
Get:73 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic/main amd64 libxshm4 1.3-1 [5028 B]
Get:74 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic-updates/main amd64gpu1 amd64 2.4.99-1ubuntu1~18.04.2 [18.2 kB]
Get:75 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic/main amd64 libpcia4 0.14-1 [17.9 kB]
Get:76 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic-updates/main amd64el1 amd64 2.4.99-1ubuntu1~18.04.2 [59.9 kB]
Get:77 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic-updates/main amd64veau2 amd64 2.4.99-1ubuntu1~18.04.2 [16.5 kB]
Get:78 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic-updates/main amd64eon1 amd64 2.4.99-1ubuntu1~18.04.2 [21.7 kB]
Get:79 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic-updates/main amd64md64 1:9-2~ubuntu18.04.2 [14.8 MB]
Get:80 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic/main amd64 libsens1:3.4.0-4 [28.8 kB]
Get:81 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic-updates/main amd64a-dri amd64 19.2.8-0ubuntu0~18.04.3 [8811 kB]
Get:82 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic-updates/main amd64a0 amd64 19.2.8-0ubuntu0~18.04.3 [139 kB]
Get:83 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic-updates/main amd64d64 1.0.0-2ubuntu2.3 [28.1 kB]
Get:84 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic-updates/main amd6464 1.0.0-2ubuntu2.3 [86.2 kB]
Get:85 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic-updates/main amd64a-glx amd64 19.2.8-0ubuntu0~18.04.3 [5528 B]
Get:86 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic/main amd64 libxt6 .5-1 [160 kB]
Get:87 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic/main amd64 libxmu61.2-2 [46.0 kB]
Get:88 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic/main amd64 libxpm45.12-1 [34.0 kB]
Get:89 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic/main amd64 libxaw70.13-1 [173 kB]
Get:90 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic-updates/main amd64pe0 amd64 1.13-2~ubuntu18.04 [5972 B]
Get:91 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic/main amd64 libxcom64 1:0.4.4-2 [6988 B]
Get:92 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic/main amd64 libxran:1.5.1-1 [18.1 kB]
Get:93 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic/main amd64 libxv1 .11-1 [10.7 kB]
Get:94 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic/main amd64 x11-uti7+3build1 [196 kB]
Get:95 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic/main amd64 libatk-a all 0.33.3-20ubuntu0.1 [34.7 kB]
Get:96 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic/main amd64 libatk-a-jni amd64 0.33.3-20ubuntu0.1 [28.3 kB]
Get:97 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic/main amd64 libflac.2-1 [213 kB]
Get:98 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic/main amd64 libgtk2ll 2.24.32-1ubuntu1 [125 kB]
Get:99 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic/main amd64 libxcur1:1.1.15-1 [19.8 kB]
Get:100 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic/main amd64 libgtk 2.24.32-1ubuntu1 [1769 kB]
Get:101 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic/main amd64 libgai.24.32-1ubuntu1 [14.2 kB]
Get:102 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic/main amd64 libgaid64 2.24.32-1ubuntu1 [112 kB]
Get:103 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic/main amd64 libgdkbin amd64 2.36.11-2 [7864 B]
Get:104 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic-updates/main amd6md64 5.1.4-2ubuntu0.1 [30.9 kB]
Get:105 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic/main amd64 libgtk64 2.24.32-1ubuntu1 [7536 B]
Get:106 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic/main amd64 xorg-ss all 1:1.11-1 [12.9 kB]
Get:107 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic/main amd64 x11pro2018.4-4 [251 kB]
Get:108 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic/main amd64 x11pro all 2018.4-4 [2620 B]
Get:109 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic/main amd64 libice2:1.0.9-2 [46.8 kB]
Get:110 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic/main amd64 libpth-dev amd64 0.3-4 [4068 B]
Get:111 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic/main amd64 libvor 1.3.5-4.2 [86.4 kB]
Get:112 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic/main amd64 libvor64 1.3.5-4.2 [70.7 kB]
Get:113 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic-updates/main amd6e1 amd64 1.0.28-4ubuntu0.18.04.1 [170 kB]
Get:114 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic-updates/main amd6 amd64 1:11.1-1ubuntu7.7 [267 kB]
Get:115 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic/main amd64 libsm-:1.2.2-1 [16.2 kB]
Get:116 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic/main amd64 libxau1:1.0.8-1 [11.1 kB]
Get:117 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic/main amd64 libxdm4 1:1.1.2-3 [25.1 kB]
Get:118 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic/main amd64 xtrans3.5-1 [70.5 kB]
Get:119 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic-updates/main amd6ev amd64 1.13-2~ubuntu18.04 [80.0 kB]
Get:120 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic-updates/main amd6v amd64 2:1.6.4-3ubuntu0.2 [640 kB]
Get:121 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic-updates/main amd6c all 2:1.6.4-3ubuntu0.2 [2065 kB]
Get:122 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic/main amd64 libxt-:1.1.5-1 [395 kB]
Get:123 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic-updates/universe dk-8-jre amd64 8u252-b09-1~18.04 [69.8 kB]
Get:124 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic-updates/universe dk-8-jdk-headless amd64 8u252-b09-1~18.04 [8250 kB]
Get:125 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic-updates/universe dk-8-jdk amd64 8u252-b09-1~18.04 [1622 kB]
Fetched 81.7 MB in 19s (4343 kB/s)
Extracting templates from packages: 100%
Selecting previously unselected package fonts-dejavu-core.
(Reading database ... 56588 files and directories currently installed.)
Preparing to unpack .../000-fonts-dejavu-core_2.37-1_all.deb ...
Unpacking fonts-dejavu-core (2.37-1) ...
Selecting previously unselected package fontconfig-config.
Preparing to unpack .../001-fontconfig-config_2.12.6-0ubuntu2_all.deb ...
Unpacking fontconfig-config (2.12.6-0ubuntu2) ...
Selecting previously unselected package libfontconfig1:amd64.
Preparing to unpack .../002-libfontconfig1_2.12.6-0ubuntu2_amd64.deb ...
Unpacking libfontconfig1:amd64 (2.12.6-0ubuntu2) ...
Selecting previously unselected package fontconfig.
Preparing to unpack .../003-fontconfig_2.12.6-0ubuntu2_amd64.deb ...
Unpacking fontconfig (2.12.6-0ubuntu2) ...
Selecting previously unselected package libjpeg-turbo8:amd64.
Preparing to unpack .../004-libjpeg-turbo8_1.5.2-0ubuntu5.18.04.3_amd64.deb ...
Unpacking libjpeg-turbo8:amd64 (1.5.2-0ubuntu5.18.04.3) ...
Selecting previously unselected package libogg0:amd64.
Preparing to unpack .../005-libogg0_1.3.2-1_amd64.deb ...
Unpacking libogg0:amd64 (1.3.2-1) ...
Selecting previously unselected package x11-common.
Preparing to unpack .../006-x11-common_1%3a7.7+19ubuntu7.1_all.deb ...
dpkg-query: no packages found matching nux-tools
Unpacking x11-common (1:7.7+19ubuntu7.1) ...
Selecting previously unselected package libice6:amd64.
Preparing to unpack .../007-libice6_2%3a1.0.9-2_amd64.deb ...
Unpacking libice6:amd64 (2:1.0.9-2) ...
Selecting previously unselected package libsm6:amd64.
Preparing to unpack .../008-libsm6_2%3a1.2.2-1_amd64.deb ...
Unpacking libsm6:amd64 (2:1.2.2-1) ...
Selecting previously unselected package libxrender1:amd64.
Preparing to unpack .../009-libxrender1_1%3a0.9.10-1_amd64.deb ...
Unpacking libxrender1:amd64 (1:0.9.10-1) ...
Selecting previously unselected package libxft2:amd64.
Preparing to unpack .../010-libxft2_2.3.2-1_amd64.deb ...
Unpacking libxft2:amd64 (2.3.2-1) ...
Selecting previously unselected package libxinerama1:amd64.
Preparing to unpack .../011-libxinerama1_2%3a1.1.3-1_amd64.deb ...
Unpacking libxinerama1:amd64 (2:1.1.3-1) ...
Selecting previously unselected package libxxf86dga1:amd64.
Preparing to unpack .../012-libxxf86dga1_2%3a1.1.4-1_amd64.deb ...
Unpacking libxxf86dga1:amd64 (2:1.1.4-1) ...
Selecting previously unselected package libxxf86vm1:amd64.
Preparing to unpack .../013-libxxf86vm1_1%3a1.1.4-1_amd64.deb ...
Unpacking libxxf86vm1:amd64 (1:1.1.4-1) ...
Selecting previously unselected package hicolor-icon-theme.
Preparing to unpack .../014-hicolor-icon-theme_0.17-2_all.deb ...
Unpacking hicolor-icon-theme (0.17-2) ...
Selecting previously unselected package libjpeg8:amd64.
Preparing to unpack .../015-libjpeg8_8c-2ubuntu8_amd64.deb ...
Unpacking libjpeg8:amd64 (8c-2ubuntu8) ...
Selecting previously unselected package libjbig0:amd64.
Preparing to unpack .../016-libjbig0_2.1-3.1build1_amd64.deb ...
Unpacking libjbig0:amd64 (2.1-3.1build1) ...
Selecting previously unselected package libtiff5:amd64.
Preparing to unpack .../017-libtiff5_4.0.9-5ubuntu0.3_amd64.deb ...
Unpacking libtiff5:amd64 (4.0.9-5ubuntu0.3) ...
Selecting previously unselected package libgdk-pixbuf2.0-common.
Preparing to unpack .../018-libgdk-pixbuf2.0-common_2.36.11-2_all.deb ...
Unpacking libgdk-pixbuf2.0-common (2.36.11-2) ...
Selecting previously unselected package libgdk-pixbuf2.0-0:amd64.
Preparing to unpack .../019-libgdk-pixbuf2.0-0_2.36.11-2_amd64.deb ...
Unpacking libgdk-pixbuf2.0-0:amd64 (2.36.11-2) ...
Selecting previously unselected package gtk-update-icon-cache.
Preparing to unpack .../020-gtk-update-icon-cache_3.22.30-1ubuntu4_amd64.deb ...
No diversion 'diversion of /usr/sbin/update-icon-caches to /usr/sbin/update-icon2 by libgtk-3-bin', none removed.
No diversion 'diversion of /usr/share/man/man8/update-icon-caches.8.gz to /usr/sn8/update-icon-caches.gtk2.8.gz by libgtk-3-bin', none removed.
Unpacking gtk-update-icon-cache (3.22.30-1ubuntu4) ...
Selecting previously unselected package libpixman-1-0:amd64.
Preparing to unpack .../021-libpixman-1-0_0.34.0-2_amd64.deb ...
Unpacking libpixman-1-0:amd64 (0.34.0-2) ...
Selecting previously unselected package libxcb-render0:amd64.
Preparing to unpack .../022-libxcb-render0_1.13-2~ubuntu18.04_amd64.deb ...
Unpacking libxcb-render0:amd64 (1.13-2~ubuntu18.04) ...
Selecting previously unselected package libxcb-shm0:amd64.
Preparing to unpack .../023-libxcb-shm0_1.13-2~ubuntu18.04_amd64.deb ...
Unpacking libxcb-shm0:amd64 (1.13-2~ubuntu18.04) ...
Selecting previously unselected package libcairo2:amd64.
Preparing to unpack .../024-libcairo2_1.15.10-2ubuntu0.1_amd64.deb ...
Unpacking libcairo2:amd64 (1.15.10-2ubuntu0.1) ...
Selecting previously unselected package libcroco3:amd64.
Preparing to unpack .../025-libcroco3_0.6.12-2_amd64.deb ...
Unpacking libcroco3:amd64 (0.6.12-2) ...
Selecting previously unselected package libthai-data.
Preparing to unpack .../026-libthai-data_0.1.27-2_all.deb ...
Unpacking libthai-data (0.1.27-2) ...
Selecting previously unselected package libdatrie1:amd64.
Preparing to unpack .../027-libdatrie1_0.2.10-7_amd64.deb ...
Unpacking libdatrie1:amd64 (0.2.10-7) ...
Selecting previously unselected package libthai0:amd64.
Preparing to unpack .../028-libthai0_0.1.27-2_amd64.deb ...
Unpacking libthai0:amd64 (0.1.27-2) ...
Selecting previously unselected package libpango-1.0-0:amd64.
Preparing to unpack .../029-libpango-1.0-0_1.40.14-1ubuntu0.1_amd64.deb ...
Unpacking libpango-1.0-0:amd64 (1.40.14-1ubuntu0.1) ...
Selecting previously unselected package libgraphite2-3:amd64.
Preparing to unpack .../030-libgraphite2-3_1.3.11-2_amd64.deb ...
Unpacking libgraphite2-3:amd64 (1.3.11-2) ...
Selecting previously unselected package libharfbuzz0b:amd64.
Preparing to unpack .../031-libharfbuzz0b_1.7.2-1ubuntu1_amd64.deb ...
Unpacking libharfbuzz0b:amd64 (1.7.2-1ubuntu1) ...
Selecting previously unselected package libpangoft2-1.0-0:amd64.
Preparing to unpack .../032-libpangoft2-1.0-0_1.40.14-1ubuntu0.1_amd64.deb ...
Unpacking libpangoft2-1.0-0:amd64 (1.40.14-1ubuntu0.1) ...
Selecting previously unselected package libpangocairo-1.0-0:amd64.
Preparing to unpack .../033-libpangocairo-1.0-0_1.40.14-1ubuntu0.1_amd64.deb ...
Unpacking libpangocairo-1.0-0:amd64 (1.40.14-1ubuntu0.1) ...
Selecting previously unselected package librsvg2-2:amd64.
Preparing to unpack .../034-librsvg2-2_2.40.20-2_amd64.deb ...
Unpacking librsvg2-2:amd64 (2.40.20-2) ...
Selecting previously unselected package librsvg2-common:amd64.
Preparing to unpack .../035-librsvg2-common_2.40.20-2_amd64.deb ...
Unpacking librsvg2-common:amd64 (2.40.20-2) ...
Selecting previously unselected package humanity-icon-theme.
Preparing to unpack .../036-humanity-icon-theme_0.6.15_all.deb ...
Unpacking humanity-icon-theme (0.6.15) ...
Selecting previously unselected package ubuntu-mono.
Preparing to unpack .../037-ubuntu-mono_16.10+18.04.20181005-0ubuntu1_all.deb ..
Unpacking ubuntu-mono (16.10+18.04.20181005-0ubuntu1) ...
Selecting previously unselected package adwaita-icon-theme.
Preparing to unpack .../038-adwaita-icon-theme_3.28.0-1ubuntu1_all.deb ...
Unpacking adwaita-icon-theme (3.28.0-1ubuntu1) ...
Selecting previously unselected package libatspi2.0-0:amd64.
Preparing to unpack .../039-libatspi2.0-0_2.28.0-1_amd64.deb ...
Unpacking libatspi2.0-0:amd64 (2.28.0-1) ...
Selecting previously unselected package libxtst6:amd64.
Preparing to unpack .../040-libxtst6_2%3a1.2.3-1_amd64.deb ...
Unpacking libxtst6:amd64 (2:1.2.3-1) ...
Selecting previously unselected package at-spi2-core.
Preparing to unpack .../041-at-spi2-core_2.28.0-1_amd64.deb ...
Unpacking at-spi2-core (2.28.0-1) ...
Selecting previously unselected package java-common.
Preparing to unpack .../042-java-common_0.68ubuntu1~18.04.1_all.deb ...
Unpacking java-common (0.68ubuntu1~18.04.1) ...
Selecting previously unselected package libavahi-common-data:amd64.
Preparing to unpack .../043-libavahi-common-data_0.7-3.1ubuntu1.2_amd64.deb ...
Unpacking libavahi-common-data:amd64 (0.7-3.1ubuntu1.2) ...
Selecting previously unselected package libavahi-common3:amd64.
Preparing to unpack .../044-libavahi-common3_0.7-3.1ubuntu1.2_amd64.deb ...
Unpacking libavahi-common3:amd64 (0.7-3.1ubuntu1.2) ...
Selecting previously unselected package libavahi-client3:amd64.
Preparing to unpack .../045-libavahi-client3_0.7-3.1ubuntu1.2_amd64.deb ...
Unpacking libavahi-client3:amd64 (0.7-3.1ubuntu1.2) ...
Selecting previously unselected package libcups2:amd64.
Preparing to unpack .../046-libcups2_2.2.7-1ubuntu2.8_amd64.deb ...
Unpacking libcups2:amd64 (2.2.7-1ubuntu2.8) ...
Selecting previously unselected package liblcms2-2:amd64.
Preparing to unpack .../047-liblcms2-2_2.9-1ubuntu0.1_amd64.deb ...
Unpacking liblcms2-2:amd64 (2.9-1ubuntu0.1) ...
Selecting previously unselected package libnspr4:amd64.
Preparing to unpack .../048-libnspr4_2%3a4.18-1ubuntu1_amd64.deb ...
Unpacking libnspr4:amd64 (2:4.18-1ubuntu1) ...
Selecting previously unselected package libnss3:amd64.
Preparing to unpack .../049-libnss3_2%3a3.35-2ubuntu2.7_amd64.deb ...
Unpacking libnss3:amd64 (2:3.35-2ubuntu2.7) ...
Selecting previously unselected package libpcsclite1:amd64.
Preparing to unpack .../050-libpcsclite1_1.8.23-1_amd64.deb ...
Unpacking libpcsclite1:amd64 (1.8.23-1) ...
Selecting previously unselected package libxi6:amd64.
Preparing to unpack .../051-libxi6_2%3a1.7.9-1_amd64.deb ...
Unpacking libxi6:amd64 (2:1.7.9-1) ...
Selecting previously unselected package openjdk-8-jre-headless:amd64.
Preparing to unpack .../052-openjdk-8-jre-headless_8u252-b09-1~18.04_amd64.deb .
Unpacking openjdk-8-jre-headless:amd64 (8u252-b09-1~18.04) ...
Selecting previously unselected package ca-certificates-java.
Preparing to unpack .../053-ca-certificates-java_20180516ubuntu1~18.04.1_all.deb
Unpacking ca-certificates-java (20180516ubuntu1~18.04.1) ...
Selecting previously unselected package fonts-dejavu-extra.
Preparing to unpack .../054-fonts-dejavu-extra_2.37-1_all.deb ...
Unpacking fonts-dejavu-extra (2.37-1) ...
Selecting previously unselected package libasound2-data.
Preparing to unpack .../055-libasound2-data_1.1.3-5ubuntu0.5_all.deb ...
Unpacking libasound2-data (1.1.3-5ubuntu0.5) ...
Selecting previously unselected package libasound2:amd64.
Preparing to unpack .../056-libasound2_1.1.3-5ubuntu0.5_amd64.deb ...
Unpacking libasound2:amd64 (1.1.3-5ubuntu0.5) ...
Selecting previously unselected package libasyncns0:amd64.
Preparing to unpack .../057-libasyncns0_0.8-6_amd64.deb ...
Unpacking libasyncns0:amd64 (0.8-6) ...
Selecting previously unselected package libatk1.0-data.
Preparing to unpack .../058-libatk1.0-data_2.28.1-1_all.deb ...
Unpacking libatk1.0-data (2.28.1-1) ...
Selecting previously unselected package libatk1.0-0:amd64.
Preparing to unpack .../059-libatk1.0-0_2.28.1-1_amd64.deb ...
Unpacking libatk1.0-0:amd64 (2.28.1-1) ...
Selecting previously unselected package libatk-bridge2.0-0:amd64.
Preparing to unpack .../060-libatk-bridge2.0-0_2.26.2-1_amd64.deb ...
Unpacking libatk-bridge2.0-0:amd64 (2.26.2-1) ...
Selecting previously unselected package libfontenc1:amd64.
Preparing to unpack .../061-libfontenc1_1%3a1.1.3-1_amd64.deb ...
Unpacking libfontenc1:amd64 (1:1.1.3-1) ...
Selecting previously unselected package libglvnd0:amd64.
Preparing to unpack .../062-libglvnd0_1.0.0-2ubuntu2.3_amd64.deb ...
Unpacking libglvnd0:amd64 (1.0.0-2ubuntu2.3) ...
Selecting previously unselected package libglapi-mesa:amd64.
Preparing to unpack .../063-libglapi-mesa_19.2.8-0ubuntu0~18.04.3_amd64.deb ...
Unpacking libglapi-mesa:amd64 (19.2.8-0ubuntu0~18.04.3) ...
Selecting previously unselected package libx11-xcb1:amd64.
Preparing to unpack .../064-libx11-xcb1_2%3a1.6.4-3ubuntu0.2_amd64.deb ...
Unpacking libx11-xcb1:amd64 (2:1.6.4-3ubuntu0.2) ...
Selecting previously unselected package libxcb-dri2-0:amd64.
Preparing to unpack .../065-libxcb-dri2-0_1.13-2~ubuntu18.04_amd64.deb ...
Unpacking libxcb-dri2-0:amd64 (1.13-2~ubuntu18.04) ...
Selecting previously unselected package libxcb-dri3-0:amd64.
Preparing to unpack .../066-libxcb-dri3-0_1.13-2~ubuntu18.04_amd64.deb ...
Unpacking libxcb-dri3-0:amd64 (1.13-2~ubuntu18.04) ...
Selecting previously unselected package libxcb-glx0:amd64.
Preparing to unpack .../067-libxcb-glx0_1.13-2~ubuntu18.04_amd64.deb ...
Unpacking libxcb-glx0:amd64 (1.13-2~ubuntu18.04) ...
Selecting previously unselected package libxcb-present0:amd64.
Preparing to unpack .../068-libxcb-present0_1.13-2~ubuntu18.04_amd64.deb ...
Unpacking libxcb-present0:amd64 (1.13-2~ubuntu18.04) ...
Selecting previously unselected package libxcb-sync1:amd64.
Preparing to unpack .../069-libxcb-sync1_1.13-2~ubuntu18.04_amd64.deb ...
Unpacking libxcb-sync1:amd64 (1.13-2~ubuntu18.04) ...
Selecting previously unselected package libxdamage1:amd64.
Preparing to unpack .../070-libxdamage1_1%3a1.1.4-3_amd64.deb ...
Unpacking libxdamage1:amd64 (1:1.1.4-3) ...
Selecting previously unselected package libxfixes3:amd64.
Preparing to unpack .../071-libxfixes3_1%3a5.0.3-1_amd64.deb ...
Unpacking libxfixes3:amd64 (1:5.0.3-1) ...
Selecting previously unselected package libxshmfence1:amd64.
Preparing to unpack .../072-libxshmfence1_1.3-1_amd64.deb ...
Unpacking libxshmfence1:amd64 (1.3-1) ...
Selecting previously unselected package libdrm-amdgpu1:amd64.
Preparing to unpack .../073-libdrm-amdgpu1_2.4.99-1ubuntu1~18.04.2_amd64.deb ...
Unpacking libdrm-amdgpu1:amd64 (2.4.99-1ubuntu1~18.04.2) ...
Selecting previously unselected package libpciaccess0:amd64.
Preparing to unpack .../074-libpciaccess0_0.14-1_amd64.deb ...
Unpacking libpciaccess0:amd64 (0.14-1) ...
Selecting previously unselected package libdrm-intel1:amd64.
Preparing to unpack .../075-libdrm-intel1_2.4.99-1ubuntu1~18.04.2_amd64.deb ...
Unpacking libdrm-intel1:amd64 (2.4.99-1ubuntu1~18.04.2) ...
Selecting previously unselected package libdrm-nouveau2:amd64.
Preparing to unpack .../076-libdrm-nouveau2_2.4.99-1ubuntu1~18.04.2_amd64.deb ..
Unpacking libdrm-nouveau2:amd64 (2.4.99-1ubuntu1~18.04.2) ...
Selecting previously unselected package libdrm-radeon1:amd64.
Preparing to unpack .../077-libdrm-radeon1_2.4.99-1ubuntu1~18.04.2_amd64.deb ...
Unpacking libdrm-radeon1:amd64 (2.4.99-1ubuntu1~18.04.2) ...
Selecting previously unselected package libllvm9:amd64.
Preparing to unpack .../078-libllvm9_1%3a9-2~ubuntu18.04.2_amd64.deb ...
Unpacking libllvm9:amd64 (1:9-2~ubuntu18.04.2) ...
Selecting previously unselected package libsensors4:amd64.
Preparing to unpack .../079-libsensors4_1%3a3.4.0-4_amd64.deb ...
Unpacking libsensors4:amd64 (1:3.4.0-4) ...
Selecting previously unselected package libgl1-mesa-dri:amd64.
Preparing to unpack .../080-libgl1-mesa-dri_19.2.8-0ubuntu0~18.04.3_amd64.deb ..
Unpacking libgl1-mesa-dri:amd64 (19.2.8-0ubuntu0~18.04.3) ...
Selecting previously unselected package libglx-mesa0:amd64.
Preparing to unpack .../081-libglx-mesa0_19.2.8-0ubuntu0~18.04.3_amd64.deb ...
Unpacking libglx-mesa0:amd64 (19.2.8-0ubuntu0~18.04.3) ...
Selecting previously unselected package libglx0:amd64.
Preparing to unpack .../082-libglx0_1.0.0-2ubuntu2.3_amd64.deb ...
Unpacking libglx0:amd64 (1.0.0-2ubuntu2.3) ...
Selecting previously unselected package libgl1:amd64.
Preparing to unpack .../083-libgl1_1.0.0-2ubuntu2.3_amd64.deb ...
Unpacking libgl1:amd64 (1.0.0-2ubuntu2.3) ...
Selecting previously unselected package libgl1-mesa-glx:amd64.
Preparing to unpack .../084-libgl1-mesa-glx_19.2.8-0ubuntu0~18.04.3_amd64.deb ..
Unpacking libgl1-mesa-glx:amd64 (19.2.8-0ubuntu0~18.04.3) ...
Selecting previously unselected package libxt6:amd64.
Preparing to unpack .../085-libxt6_1%3a1.1.5-1_amd64.deb ...
Unpacking libxt6:amd64 (1:1.1.5-1) ...
Selecting previously unselected package libxmu6:amd64.
Preparing to unpack .../086-libxmu6_2%3a1.1.2-2_amd64.deb ...
Unpacking libxmu6:amd64 (2:1.1.2-2) ...
Selecting previously unselected package libxpm4:amd64.
Preparing to unpack .../087-libxpm4_1%3a3.5.12-1_amd64.deb ...
Unpacking libxpm4:amd64 (1:3.5.12-1) ...
Selecting previously unselected package libxaw7:amd64.
Preparing to unpack .../088-libxaw7_2%3a1.0.13-1_amd64.deb ...
Unpacking libxaw7:amd64 (2:1.0.13-1) ...
Selecting previously unselected package libxcb-shape0:amd64.
Preparing to unpack .../089-libxcb-shape0_1.13-2~ubuntu18.04_amd64.deb ...
Unpacking libxcb-shape0:amd64 (1.13-2~ubuntu18.04) ...
Selecting previously unselected package libxcomposite1:amd64.
Preparing to unpack .../090-libxcomposite1_1%3a0.4.4-2_amd64.deb ...
Unpacking libxcomposite1:amd64 (1:0.4.4-2) ...
Selecting previously unselected package libxrandr2:amd64.
Preparing to unpack .../091-libxrandr2_2%3a1.5.1-1_amd64.deb ...
Unpacking libxrandr2:amd64 (2:1.5.1-1) ...
Selecting previously unselected package libxv1:amd64.
Preparing to unpack .../092-libxv1_2%3a1.0.11-1_amd64.deb ...
Unpacking libxv1:amd64 (2:1.0.11-1) ...
Selecting previously unselected package x11-utils.
Preparing to unpack .../093-x11-utils_7.7+3build1_amd64.deb ...
Unpacking x11-utils (7.7+3build1) ...
Selecting previously unselected package libatk-wrapper-java.
Preparing to unpack .../094-libatk-wrapper-java_0.33.3-20ubuntu0.1_all.deb ...
Unpacking libatk-wrapper-java (0.33.3-20ubuntu0.1) ...
Selecting previously unselected package libatk-wrapper-java-jni:amd64.
Preparing to unpack .../095-libatk-wrapper-java-jni_0.33.3-20ubuntu0.1_amd64.deb
Unpacking libatk-wrapper-java-jni:amd64 (0.33.3-20ubuntu0.1) ...
Selecting previously unselected package libflac8:amd64.
Preparing to unpack .../096-libflac8_1.3.2-1_amd64.deb ...
Unpacking libflac8:amd64 (1.3.2-1) ...
Selecting previously unselected package libgtk2.0-common.
Preparing to unpack .../097-libgtk2.0-common_2.24.32-1ubuntu1_all.deb ...
Unpacking libgtk2.0-common (2.24.32-1ubuntu1) ...
Selecting previously unselected package libxcursor1:amd64.
Preparing to unpack .../098-libxcursor1_1%3a1.1.15-1_amd64.deb ...
Unpacking libxcursor1:amd64 (1:1.1.15-1) ...
Selecting previously unselected package libgtk2.0-0:amd64.
Preparing to unpack .../099-libgtk2.0-0_2.24.32-1ubuntu1_amd64.deb ...
Unpacking libgtk2.0-0:amd64 (2.24.32-1ubuntu1) ...
Selecting previously unselected package libgail18:amd64.
Preparing to unpack .../100-libgail18_2.24.32-1ubuntu1_amd64.deb ...
Unpacking libgail18:amd64 (2.24.32-1ubuntu1) ...
Selecting previously unselected package libgail-common:amd64.
Preparing to unpack .../101-libgail-common_2.24.32-1ubuntu1_amd64.deb ...
Unpacking libgail-common:amd64 (2.24.32-1ubuntu1) ...
Selecting previously unselected package libgdk-pixbuf2.0-bin.
Preparing to unpack .../102-libgdk-pixbuf2.0-bin_2.36.11-2_amd64.deb ...
Unpacking libgdk-pixbuf2.0-bin (2.36.11-2) ...
Selecting previously unselected package libgif7:amd64.
Preparing to unpack .../103-libgif7_5.1.4-2ubuntu0.1_amd64.deb ...
Unpacking libgif7:amd64 (5.1.4-2ubuntu0.1) ...
Selecting previously unselected package libgtk2.0-bin.
Preparing to unpack .../104-libgtk2.0-bin_2.24.32-1ubuntu1_amd64.deb ...
Unpacking libgtk2.0-bin (2.24.32-1ubuntu1) ...
Selecting previously unselected package xorg-sgml-doctools.
Preparing to unpack .../105-xorg-sgml-doctools_1%3a1.11-1_all.deb ...
Unpacking xorg-sgml-doctools (1:1.11-1) ...
Selecting previously unselected package x11proto-dev.
Preparing to unpack .../106-x11proto-dev_2018.4-4_all.deb ...
Unpacking x11proto-dev (2018.4-4) ...
Selecting previously unselected package x11proto-core-dev.
Preparing to unpack .../107-x11proto-core-dev_2018.4-4_all.deb ...
Unpacking x11proto-core-dev (2018.4-4) ...
Selecting previously unselected package libice-dev:amd64.
Preparing to unpack .../108-libice-dev_2%3a1.0.9-2_amd64.deb ...
Unpacking libice-dev:amd64 (2:1.0.9-2) ...
Selecting previously unselected package libpthread-stubs0-dev:amd64.
Preparing to unpack .../109-libpthread-stubs0-dev_0.3-4_amd64.deb ...
Unpacking libpthread-stubs0-dev:amd64 (0.3-4) ...
Selecting previously unselected package libvorbis0a:amd64.
Preparing to unpack .../110-libvorbis0a_1.3.5-4.2_amd64.deb ...
Unpacking libvorbis0a:amd64 (1.3.5-4.2) ...
Selecting previously unselected package libvorbisenc2:amd64.
Preparing to unpack .../111-libvorbisenc2_1.3.5-4.2_amd64.deb ...
Unpacking libvorbisenc2:amd64 (1.3.5-4.2) ...
Selecting previously unselected package libsndfile1:amd64.
Preparing to unpack .../112-libsndfile1_1.0.28-4ubuntu0.18.04.1_amd64.deb ...
Unpacking libsndfile1:amd64 (1.0.28-4ubuntu0.18.04.1) ...
Selecting previously unselected package libpulse0:amd64.
Preparing to unpack .../113-libpulse0_1%3a11.1-1ubuntu7.7_amd64.deb ...
Unpacking libpulse0:amd64 (1:11.1-1ubuntu7.7) ...
Selecting previously unselected package libsm-dev:amd64.
Preparing to unpack .../114-libsm-dev_2%3a1.2.2-1_amd64.deb ...
Unpacking libsm-dev:amd64 (2:1.2.2-1) ...
Selecting previously unselected package libxau-dev:amd64.
Preparing to unpack .../115-libxau-dev_1%3a1.0.8-1_amd64.deb ...
Unpacking libxau-dev:amd64 (1:1.0.8-1) ...
Selecting previously unselected package libxdmcp-dev:amd64.
Preparing to unpack .../116-libxdmcp-dev_1%3a1.1.2-3_amd64.deb ...
Unpacking libxdmcp-dev:amd64 (1:1.1.2-3) ...
Selecting previously unselected package xtrans-dev.
Preparing to unpack .../117-xtrans-dev_1.3.5-1_all.deb ...
Unpacking xtrans-dev (1.3.5-1) ...
Selecting previously unselected package libxcb1-dev:amd64.
Preparing to unpack .../118-libxcb1-dev_1.13-2~ubuntu18.04_amd64.deb ...
Unpacking libxcb1-dev:amd64 (1.13-2~ubuntu18.04) ...
Selecting previously unselected package libx11-dev:amd64.
Preparing to unpack .../119-libx11-dev_2%3a1.6.4-3ubuntu0.2_amd64.deb ...
Unpacking libx11-dev:amd64 (2:1.6.4-3ubuntu0.2) ...
Selecting previously unselected package libx11-doc.
Preparing to unpack .../120-libx11-doc_2%3a1.6.4-3ubuntu0.2_all.deb ...
Unpacking libx11-doc (2:1.6.4-3ubuntu0.2) ...
Selecting previously unselected package libxt-dev:amd64.
Preparing to unpack .../121-libxt-dev_1%3a1.1.5-1_amd64.deb ...
Unpacking libxt-dev:amd64 (1:1.1.5-1) ...
Selecting previously unselected package openjdk-8-jre:amd64.
Preparing to unpack .../122-openjdk-8-jre_8u252-b09-1~18.04_amd64.deb ...
Unpacking openjdk-8-jre:amd64 (8u252-b09-1~18.04) ...
Selecting previously unselected package openjdk-8-jdk-headless:amd64.
Preparing to unpack .../123-openjdk-8-jdk-headless_8u252-b09-1~18.04_amd64.deb .
Unpacking openjdk-8-jdk-headless:amd64 (8u252-b09-1~18.04) ...
Selecting previously unselected package openjdk-8-jdk:amd64.
Preparing to unpack .../124-openjdk-8-jdk_8u252-b09-1~18.04_amd64.deb ...
Unpacking openjdk-8-jdk:amd64 (8u252-b09-1~18.04) ...
Setting up libxi6:amd64 (2:1.7.9-1) ...
Setting up libxcb-present0:amd64 (1.13-2~ubuntu18.04) ...
Setting up libglvnd0:amd64 (1.0.0-2ubuntu2.3) ...
Setting up libxinerama1:amd64 (2:1.1.3-1) ...
Setting up libxcb-dri2-0:amd64 (1.13-2~ubuntu18.04) ...
Setting up libxcb-dri3-0:amd64 (1.13-2~ubuntu18.04) ...
Setting up libxcb-glx0:amd64 (1.13-2~ubuntu18.04) ...
Setting up libgtk2.0-common (2.24.32-1ubuntu1) ...
Setting up libxcb-render0:amd64 (1.13-2~ubuntu18.04) ...
Setting up libasyncns0:amd64 (0.8-6) ...
Setting up libxdamage1:amd64 (1:1.1.4-3) ...
Setting up libxfixes3:amd64 (1:5.0.3-1) ...
Setting up libdrm-amdgpu1:amd64 (2.4.99-1ubuntu1~18.04.2) ...
Setting up liblcms2-2:amd64 (2.9-1ubuntu0.1) ...
Setting up libjbig0:amd64 (2.1-3.1build1) ...
Setting up libpcsclite1:amd64 (1.8.23-1) ...
Setting up libpthread-stubs0-dev:amd64 (0.3-4) ...
Setting up fonts-dejavu-core (2.37-1) ...
Setting up libatspi2.0-0:amd64 (2.28.0-1) ...
Setting up libasound2-data (1.1.3-5ubuntu0.5) ...
Setting up libxshmfence1:amd64 (1.3-1) ...
Setting up xorg-sgml-doctools (1:1.11-1) ...
Setting up java-common (0.68ubuntu1~18.04.1) ...
Setting up libgdk-pixbuf2.0-common (2.36.11-2) ...
Setting up libdatrie1:amd64 (0.2.10-7) ...
Setting up libgif7:amd64 (5.1.4-2ubuntu0.1) ...
Setting up libjpeg-turbo8:amd64 (1.5.2-0ubuntu5.18.04.3) ...
Setting up libglapi-mesa:amd64 (19.2.8-0ubuntu0~18.04.3) ...
Setting up libnspr4:amd64 (2:4.18-1ubuntu1) ...
Setting up x11proto-dev (2018.4-4) ...
Setting up libasound2:amd64 (1.1.3-5ubuntu0.5) ...
Setting up libgraphite2-3:amd64 (1.3.11-2) ...
Setting up libcroco3:amd64 (0.6.12-2) ...
Setting up libxcb-sync1:amd64 (1.13-2~ubuntu18.04) ...
Setting up libogg0:amd64 (1.3.2-1) ...
Setting up libatk1.0-data (2.28.1-1) ...
Setting up libx11-xcb1:amd64 (2:1.6.4-3ubuntu0.2) ...
Setting up libpixman-1-0:amd64 (0.34.0-2) ...
Setting up xtrans-dev (1.3.5-1) ...
Setting up libxdmcp-dev:amd64 (1:1.1.2-3) ...
Setting up libxxf86dga1:amd64 (2:1.1.4-1) ...
Setting up libatk1.0-0:amd64 (2.28.1-1) ...
Setting up libatk-bridge2.0-0:amd64 (2.26.2-1) ...
Setting up libfontenc1:amd64 (1:1.1.3-1) ...
Setting up libxcomposite1:amd64 (1:0.4.4-2) ...
Setting up libxcb-shm0:amd64 (1.13-2~ubuntu18.04) ...
Setting up libxpm4:amd64 (1:3.5.12-1) ...
Setting up libx11-doc (2:1.6.4-3ubuntu0.2) ...
Setting up libxcb-shape0:amd64 (1.13-2~ubuntu18.04) ...
Setting up libpciaccess0:amd64 (0.14-1) ...
Setting up libxrender1:amd64 (1:0.9.10-1) ...
Setting up libxv1:amd64 (2:1.0.11-1) ...
Setting up libsensors4:amd64 (1:3.4.0-4) ...
Setting up libdrm-radeon1:amd64 (2.4.99-1ubuntu1~18.04.2) ...
Setting up libthai-data (0.1.27-2) ...
Setting up libxxf86vm1:amd64 (1:1.1.4-1) ...
Setting up libllvm9:amd64 (1:9-2~ubuntu18.04.2) ...
Setting up libdrm-nouveau2:amd64 (2.4.99-1ubuntu1~18.04.2) ...
Setting up fonts-dejavu-extra (2.37-1) ...
Setting up libvorbis0a:amd64 (1.3.5-4.2) ...
Setting up x11-common (1:7.7+19ubuntu7.1) ...
update-rc.d: warning: start and stop actions are no longer supported; falling balts
Setting up hicolor-icon-theme (0.17-2) ...
Setting up libxrandr2:amd64 (2:1.5.1-1) ...
Setting up libavahi-common-data:amd64 (0.7-3.1ubuntu1.2) ...
Setting up libjpeg8:amd64 (8c-2ubuntu8) ...
Setting up fontconfig-config (2.12.6-0ubuntu2) ...
Setting up x11proto-core-dev (2018.4-4) ...
Setting up libflac8:amd64 (1.3.2-1) ...
Setting up libnss3:amd64 (2:3.35-2ubuntu2.7) ...
Setting up libharfbuzz0b:amd64 (1.7.2-1ubuntu1) ...
Setting up libtiff5:amd64 (4.0.9-5ubuntu0.3) ...
Setting up libxau-dev:amd64 (1:1.0.8-1) ...
Setting up libthai0:amd64 (0.1.27-2) ...
Setting up libxtst6:amd64 (2:1.2.3-1) ...
Setting up libdrm-intel1:amd64 (2.4.99-1ubuntu1~18.04.2) ...
Setting up libxcursor1:amd64 (1:1.1.15-1) ...
Setting up libice6:amd64 (2:1.0.9-2) ...
Setting up libxcb1-dev:amd64 (1.13-2~ubuntu18.04) ...
Setting up libavahi-common3:amd64 (0.7-3.1ubuntu1.2) ...
Setting up libx11-dev:amd64 (2:1.6.4-3ubuntu0.2) ...
Setting up libvorbisenc2:amd64 (1.3.5-4.2) ...
Setting up libfontconfig1:amd64 (2.12.6-0ubuntu2) ...
Setting up libsm6:amd64 (2:1.2.2-1) ...
Setting up at-spi2-core (2.28.0-1) ...
Setting up libgdk-pixbuf2.0-0:amd64 (2.36.11-2) ...
Setting up libgl1-mesa-dri:amd64 (19.2.8-0ubuntu0~18.04.3) ...
Setting up libgdk-pixbuf2.0-bin (2.36.11-2) ...
Setting up libsndfile1:amd64 (1.0.28-4ubuntu0.18.04.1) ...
Setting up gtk-update-icon-cache (3.22.30-1ubuntu4) ...
Setting up libice-dev:amd64 (2:1.0.9-2) ...
Setting up libxt6:amd64 (1:1.1.5-1) ...
Setting up libavahi-client3:amd64 (0.7-3.1ubuntu1.2) ...
Setting up libxft2:amd64 (2.3.2-1) ...
Setting up fontconfig (2.12.6-0ubuntu2) ...
Regenerating fonts cache... done.
Setting up libglx-mesa0:amd64 (19.2.8-0ubuntu0~18.04.3) ...
Setting up libcups2:amd64 (2.2.7-1ubuntu2.8) ...
Setting up libcairo2:amd64 (1.15.10-2ubuntu0.1) ...
Setting up libsm-dev:amd64 (2:1.2.2-1) ...
Setting up libpulse0:amd64 (1:11.1-1ubuntu7.7) ...
Setting up libxmu6:amd64 (2:1.1.2-2) ...
Setting up libpango-1.0-0:amd64 (1.40.14-1ubuntu0.1) ...
Setting up libglx0:amd64 (1.0.0-2ubuntu2.3) ...
Setting up libxaw7:amd64 (2:1.0.13-1) ...
Setting up libxt-dev:amd64 (1:1.1.5-1) ...
Setting up libpangoft2-1.0-0:amd64 (1.40.14-1ubuntu0.1) ...
Setting up libgl1:amd64 (1.0.0-2ubuntu2.3) ...
Setting up x11-utils (7.7+3build1) ...
Setting up libpangocairo-1.0-0:amd64 (1.40.14-1ubuntu0.1) ...
Setting up libgl1-mesa-glx:amd64 (19.2.8-0ubuntu0~18.04.3) ...
Setting up libatk-wrapper-java (0.33.3-20ubuntu0.1) ...
Setting up librsvg2-2:amd64 (2.40.20-2) ...
Setting up librsvg2-common:amd64 (2.40.20-2) ...
Setting up libatk-wrapper-java-jni:amd64 (0.33.3-20ubuntu0.1) ...
Setting up adwaita-icon-theme (3.28.0-1ubuntu1) ...
update-alternatives: using /usr/share/icons/Adwaita/cursor.theme to provide /usrs/default/index.theme (x-cursor-theme) in auto mode
Setting up libgtk2.0-0:amd64 (2.24.32-1ubuntu1) ...
Setting up ca-certificates-java (20180516ubuntu1~18.04.1) ...
head: cannot open '/etc/ssl/certs/java/cacerts' for reading: No such file or dir
Adding debian:OpenTrust_Root_CA_G2.pem
Adding debian:Starfield_Root_Certificate_Authority_-_G2.pem
Adding debian:GeoTrust_Universal_CA.pem
Adding debian:TrustCor_RootCert_CA-1.pem
Adding debian:T-TeleSec_GlobalRoot_Class_3.pem
Adding debian:TrustCor_ECA-1.pem
Adding debian:QuoVadis_Root_CA_1_G3.pem
Adding debian:Certigna.pem
Adding debian:Staat_der_Nederlanden_Root_CA_-_G2.pem
Adding debian:CA_Disig_Root_R2.pem
Adding debian:D-TRUST_Root_Class_3_CA_2_EV_2009.pem
Adding debian:Hellenic_Academic_and_Research_Institutions_RootCA_2015.pem
Adding debian:Visa_eCommerce_Root.pem
Adding debian:Comodo_AAA_Services_root.pem
Adding debian:Autoridad_de_Certificacion_Firmaprofesional_CIF_A62634068.pem
Adding debian:Actalis_Authentication_Root_CA.pem
Adding debian:DigiCert_Assured_ID_Root_G3.pem
Adding debian:Hongkong_Post_Root_CA_1.pem
Adding debian:thawte_Primary_Root_CA_-_G2.pem
Adding debian:Certum_Trusted_Network_CA_2.pem
Adding debian:Global_Chambersign_Root_-_2008.pem
Adding debian:DigiCert_Trusted_Root_G4.pem
Adding debian:DigiCert_Global_Root_G2.pem
Adding debian:Amazon_Root_CA_2.pem
Adding debian:TeliaSonera_Root_CA_v1.pem
Adding debian:QuoVadis_Root_CA_2.pem
Adding debian:Secure_Global_CA.pem
Adding debian:COMODO_RSA_Certification_Authority.pem
Adding debian:GDCA_TrustAUTH_R5_ROOT.pem
Adding debian:E-Tugra_Certification_Authority.pem
Adding debian:ACCVRAIZ1.pem
Adding debian:LuxTrust_Global_Root_2.pem
Adding debian:EE_Certification_Centre_Root_CA.pem
Adding debian:AffirmTrust_Networking.pem
Adding debian:Starfield_Class_2_CA.pem
Adding debian:Sonera_Class_2_Root_CA.pem
Adding debian:NetLock_Arany_=Class_Gold=_Főtanúsítvány.pem
Adding debian:GeoTrust_Global_CA.pem
Adding debian:XRamp_Global_CA_Root.pem
Adding debian:OpenTrust_Root_CA_G1.pem
Adding debian:Trustis_FPS_Root_CA.pem
Adding debian:COMODO_ECC_Certification_Authority.pem
Adding debian:GeoTrust_Primary_Certification_Authority_-_G3.pem
Adding debian:DigiCert_Global_Root_CA.pem
Adding debian:QuoVadis_Root_CA.pem
Adding debian:TWCA_Global_Root_CA.pem
Adding debian:ePKI_Root_Certification_Authority.pem
Adding debian:SwissSign_Silver_CA_-_G2.pem
Adding debian:Certum_Trusted_Network_CA.pem
Adding debian:Certplus_Root_CA_G1.pem
Adding debian:IdenTrust_Public_Sector_Root_CA_1.pem
Adding debian:DST_Root_CA_X3.pem
Adding debian:AffirmTrust_Commercial.pem
Adding debian:QuoVadis_Root_CA_2_G3.pem
Adding debian:OpenTrust_Root_CA_G3.pem
Adding debian:TrustCor_RootCert_CA-2.pem
Adding debian:Certplus_Class_2_Primary_CA.pem
Adding debian:CFCA_EV_ROOT.pem
Adding debian:Hellenic_Academic_and_Research_Institutions_RootCA_2011.pem
Adding debian:USERTrust_RSA_Certification_Authority.pem
Adding debian:Verisign_Class_3_Public_Primary_Certification_Authority_-_G3.pem
Adding debian:Amazon_Root_CA_1.pem
Adding debian:Entrust.net_Premium_2048_Secure_Server_CA.pem
Adding debian:Certinomis_-_Root_CA.pem
Adding debian:AddTrust_External_Root.pem
Adding debian:GlobalSign_ECC_Root_CA_-_R4.pem
Adding debian:TWCA_Root_Certification_Authority.pem
Adding debian:SSL.com_Root_Certification_Authority_RSA.pem
Adding debian:certSIGN_ROOT_CA.pem
Adding debian:QuoVadis_Root_CA_3.pem
Adding debian:QuoVadis_Root_CA_3_G3.pem
Adding debian:Microsec_e-Szigno_Root_CA_2009.pem
Adding debian:SSL.com_Root_Certification_Authority_ECC.pem
Adding debian:Go_Daddy_Root_Certificate_Authority_-_G2.pem
Adding debian:Buypass_Class_2_Root_CA.pem
Adding debian:DigiCert_Global_Root_G3.pem
Adding debian:Starfield_Services_Root_Certificate_Authority_-_G2.pem
Adding debian:Deutsche_Telekom_Root_CA_2.pem
Adding debian:ISRG_Root_X1.pem
Adding debian:Cybertrust_Global_Root.pem
Adding debian:AC_RAIZ_FNMT-RCM.pem
Adding debian:DigiCert_High_Assurance_EV_Root_CA.pem
Adding debian:SecureSign_RootCA11.pem
Adding debian:TÜRKTRUST_Elektronik_Sertifika_Hizmet_Sağlayıcısı_H5.pem
Adding debian:GeoTrust_Universal_CA_2.pem
Adding debian:TUBITAK_Kamu_SM_SSL_Kok_Sertifikasi_-_Surum_1.pem
Adding debian:Security_Communication_Root_CA.pem
Adding debian:AffirmTrust_Premium.pem
Adding debian:VeriSign_Universal_Root_Certification_Authority.pem
Adding debian:VeriSign_Class_3_Public_Primary_Certification_Authority_-_G5.pem
Adding debian:GlobalSign_ECC_Root_CA_-_R5.pem
Adding debian:Entrust_Root_Certification_Authority.pem
Adding debian:GeoTrust_Primary_Certification_Authority.pem
Adding debian:Go_Daddy_Class_2_CA.pem
Adding debian:COMODO_Certification_Authority.pem
Adding debian:GlobalSign_Root_CA_-_R2.pem
Adding debian:SwissSign_Gold_CA_-_G2.pem
Adding debian:D-TRUST_Root_Class_3_CA_2_2009.pem
Adding debian:VeriSign_Class_3_Public_Primary_Certification_Authority_-_G4.pem
Adding debian:GeoTrust_Primary_Certification_Authority_-_G2.pem
Adding debian:Entrust_Root_Certification_Authority_-_EC1.pem
Adding debian:thawte_Primary_Root_CA.pem
Adding debian:Security_Communication_RootCA2.pem
Adding debian:Certplus_Root_CA_G2.pem
Adding debian:Chambers_of_Commerce_Root_-_2008.pem
Adding debian:Entrust_Root_Certification_Authority_-_G2.pem
Adding debian:Taiwan_GRCA.pem
Adding debian:Hellenic_Academic_and_Research_Institutions_ECC_RootCA_2015.pem
Adding debian:DigiCert_Assured_ID_Root_G2.pem
Adding debian:Baltimore_CyberTrust_Root.pem
Adding debian:Network_Solutions_Certificate_Authority.pem
Adding debian:GlobalSign_Root_CA_-_R3.pem
Adding debian:IdenTrust_Commercial_Root_CA_1.pem
Adding debian:SSL.com_EV_Root_Certification_Authority_ECC.pem
Adding debian:Amazon_Root_CA_4.pem
Adding debian:GlobalSign_Root_CA.pem
Adding debian:thawte_Primary_Root_CA_-_G3.pem
Adding debian:Atos_TrustedRoot_2011.pem
Adding debian:Staat_der_Nederlanden_Root_CA_-_G3.pem
Adding debian:SecureTrust_CA.pem
Adding debian:Staat_der_Nederlanden_EV_Root_CA.pem
Adding debian:SZAFIR_ROOT_CA2.pem
Adding debian:DigiCert_Assured_ID_Root_CA.pem
Adding debian:Buypass_Class_3_Root_CA.pem
Adding debian:USERTrust_ECC_Certification_Authority.pem
Adding debian:T-TeleSec_GlobalRoot_Class_2.pem
Adding debian:Amazon_Root_CA_3.pem
Adding debian:EC-ACC.pem
Adding debian:SSL.com_EV_Root_Certification_Authority_RSA_R2.pem
Adding debian:AffirmTrust_Premium_ECC.pem
Adding debian:OISTE_WISeKey_Global_Root_GB_CA.pem
Adding debian:Izenpe.com.pem
Adding debian:OISTE_WISeKey_Global_Root_GA_CA.pem
done.
Setting up libgail18:amd64 (2.24.32-1ubuntu1) ...
Setting up libgail-common:amd64 (2.24.32-1ubuntu1) ...
Setting up humanity-icon-theme (0.6.15) ...
Setting up libgtk2.0-bin (2.24.32-1ubuntu1) ...
Setting up ubuntu-mono (16.10+18.04.20181005-0ubuntu1) ...
Processing triggers for libc-bin (2.27-3ubuntu1) ...
Processing triggers for systemd (237-3ubuntu10.39) ...
Processing triggers for man-db (2.8.3-2ubuntu0.1) ...
Processing triggers for ca-certificates (20180409) ...
Updating certificates in /etc/ssl/certs...
0 added, 0 removed; done.
Running hooks in /etc/ca-certificates/update.d...

done.
done.
Setting up openjdk-8-jre-headless:amd64 (8u252-b09-1~18.04) ...
update-alternatives: using /usr/lib/jvm/java-8-openjdk-amd64/jre/bin/rmid to proin/rmid (rmid) in auto mode
update-alternatives: using /usr/lib/jvm/java-8-openjdk-amd64/jre/bin/java to proin/java (java) in auto mode
update-alternatives: using /usr/lib/jvm/java-8-openjdk-amd64/jre/bin/keytool to r/bin/keytool (keytool) in auto mode
update-alternatives: using /usr/lib/jvm/java-8-openjdk-amd64/jre/bin/jjs to provn/jjs (jjs) in auto mode
update-alternatives: using /usr/lib/jvm/java-8-openjdk-amd64/jre/bin/pack200 to r/bin/pack200 (pack200) in auto mode
update-alternatives: using /usr/lib/jvm/java-8-openjdk-amd64/jre/bin/rmiregistry /usr/bin/rmiregistry (rmiregistry) in auto mode
update-alternatives: using /usr/lib/jvm/java-8-openjdk-amd64/jre/bin/unpack200 tusr/bin/unpack200 (unpack200) in auto mode
update-alternatives: using /usr/lib/jvm/java-8-openjdk-amd64/jre/bin/orbd to proin/orbd (orbd) in auto mode
update-alternatives: using /usr/lib/jvm/java-8-openjdk-amd64/jre/bin/servertool /usr/bin/servertool (servertool) in auto mode
update-alternatives: using /usr/lib/jvm/java-8-openjdk-amd64/jre/bin/tnameserv tusr/bin/tnameserv (tnameserv) in auto mode
update-alternatives: using /usr/lib/jvm/java-8-openjdk-amd64/jre/lib/jexec to prbin/jexec (jexec) in auto mode
Processing triggers for mime-support (3.60ubuntu1) ...
Processing triggers for ureadahead (0.100.0-21) ...
Setting up openjdk-8-jdk-headless:amd64 (8u252-b09-1~18.04) ...
update-alternatives: using /usr/lib/jvm/java-8-openjdk-amd64/bin/idlj to providedlj (idlj) in auto mode
update-alternatives: using /usr/lib/jvm/java-8-openjdk-amd64/bin/jdeps to providjdeps (jdeps) in auto mode
update-alternatives: using /usr/lib/jvm/java-8-openjdk-amd64/bin/wsimport to proin/wsimport (wsimport) in auto mode
update-alternatives: using /usr/lib/jvm/java-8-openjdk-amd64/bin/rmic to providemic (rmic) in auto mode
update-alternatives: using /usr/lib/jvm/java-8-openjdk-amd64/bin/jinfo to providjinfo (jinfo) in auto mode
update-alternatives: using /usr/lib/jvm/java-8-openjdk-amd64/bin/jsadebugd to prbin/jsadebugd (jsadebugd) in auto mode
update-alternatives: using /usr/lib/jvm/java-8-openjdk-amd64/bin/native2ascii tosr/bin/native2ascii (native2ascii) in auto mode
update-alternatives: using /usr/lib/jvm/java-8-openjdk-amd64/bin/jstat to providjstat (jstat) in auto mode
update-alternatives: using /usr/lib/jvm/java-8-openjdk-amd64/bin/javadoc to provn/javadoc (javadoc) in auto mode
update-alternatives: using /usr/lib/jvm/java-8-openjdk-amd64/bin/javah to providjavah (javah) in auto mode
update-alternatives: using /usr/lib/jvm/java-8-openjdk-amd64/bin/clhsdb to provi/clhsdb (clhsdb) in auto mode
update-alternatives: using /usr/lib/jvm/java-8-openjdk-amd64/bin/jstack to provi/jstack (jstack) in auto mode
update-alternatives: using /usr/lib/jvm/java-8-openjdk-amd64/bin/jrunscript to p/bin/jrunscript (jrunscript) in auto mode
update-alternatives: using /usr/lib/jvm/java-8-openjdk-amd64/bin/javac to providjavac (javac) in auto mode
update-alternatives: using /usr/lib/jvm/java-8-openjdk-amd64/bin/javap to providjavap (javap) in auto mode
update-alternatives: using /usr/lib/jvm/java-8-openjdk-amd64/bin/jar to provide r (jar) in auto mode
update-alternatives: using /usr/lib/jvm/java-8-openjdk-amd64/bin/extcheck to proin/extcheck (extcheck) in auto mode
update-alternatives: using /usr/lib/jvm/java-8-openjdk-amd64/bin/hsdb to providesdb (hsdb) in auto mode
update-alternatives: using /usr/lib/jvm/java-8-openjdk-amd64/bin/schemagen to prbin/schemagen (schemagen) in auto mode
update-alternatives: using /usr/lib/jvm/java-8-openjdk-amd64/bin/jps to provide s (jps) in auto mode
update-alternatives: using /usr/lib/jvm/java-8-openjdk-amd64/bin/xjc to provide c (xjc) in auto mode
update-alternatives: using /usr/lib/jvm/java-8-openjdk-amd64/bin/jmap to providemap (jmap) in auto mode
update-alternatives: using /usr/lib/jvm/java-8-openjdk-amd64/bin/jstatd to provi/jstatd (jstatd) in auto mode
update-alternatives: using /usr/lib/jvm/java-8-openjdk-amd64/bin/jhat to providehat (jhat) in auto mode
update-alternatives: using /usr/lib/jvm/java-8-openjdk-amd64/bin/jdb to provide b (jdb) in auto mode
update-alternatives: using /usr/lib/jvm/java-8-openjdk-amd64/bin/serialver to prbin/serialver (serialver) in auto mode
update-alternatives: using /usr/lib/jvm/java-8-openjdk-amd64/bin/wsgen to providwsgen (wsgen) in auto mode
update-alternatives: using /usr/lib/jvm/java-8-openjdk-amd64/bin/jcmd to providecmd (jcmd) in auto mode
update-alternatives: using /usr/lib/jvm/java-8-openjdk-amd64/bin/jarsigner to prbin/jarsigner (jarsigner) in auto mode
Setting up openjdk-8-jre:amd64 (8u252-b09-1~18.04) ...
update-alternatives: using /usr/lib/jvm/java-8-openjdk-amd64/jre/bin/policytool /usr/bin/policytool (policytool) in auto mode
Setting up openjdk-8-jdk:amd64 (8u252-b09-1~18.04) ...
update-alternatives: using /usr/lib/jvm/java-8-openjdk-amd64/bin/appletviewer tosr/bin/appletviewer (appletviewer) in auto mode
update-alternatives: using /usr/lib/jvm/java-8-openjdk-amd64/bin/jconsole to proin/jconsole (jconsole) in auto mode
Processing triggers for libgdk-pixbuf2.0-0:amd64 (2.36.11-2) ...
Processing triggers for libc-bin (2.27-3ubuntu1) ...
root@jmaster:/home/ubuntu# java -version
openjdk version "1.8.0_252"
OpenJDK Runtime Environment (build 1.8.0_252-8u252-b09-1~18.04-b09)
OpenJDK 64-Bit Server VM (build 25.252-b09, mixed mode)
root@jmaster:/home/ubuntu# -q -O - https://pkg.jenkins.io/debian/jenkins.io.key key add -
-q: command not found
gpg: no valid OpenPGP data found.
root@jmaster:/home/ubuntu# -q -O - https://pkg.jenkins.io/debian/jenkins.io.key key add -wget -q -O - https://pkg.jenkins.io/debian/jenkins.io.key | sudo apt-ke
root@jmaster:/home/ubuntu# wget -q -O - https://pkg.jenkins.io/debian/jenkins.io apt-key add -
OK
root@jmaster:/home/ubuntu# sh -c 'echo deb http://pkg.jenkins.io/debian-stable btc/apt/sources.list.d/jenkins.list'
root@jmaster:/home/ubuntu# add-apt-repository universe
'universe' distribution component is already enabled for all sources.
root@jmaster:/home/ubuntu# gpg --keyserver  http://pkg.jenkins-ci.org/debian/jen.key --recv-keys https://pkg.jenkins.io/debian/jenkins.io.key
gpg: directory '/root/.gnupg' created
gpg: keybox '/root/.gnupg/pubring.kbx' created
gpg: "https://pkg.jenkins.io/debian/jenkins.io.key" not a key ID: skipping
root@jmaster:/home/ubuntu# gpg --keyserver  http://pkg.jenkins-ci.org/debian/jen.key --recv-keys
root@jmaster:/home/ubuntu# gpg --keyserver  http://pkg.jenkins-ci.org/debian/jen.key --recv-keys
root@jmaster:/home/ubuntu# apt update
Ign:1 https://pkg.jenkins.io/debian-stable binary/ InRelease
Get:2 https://pkg.jenkins.io/debian-stable binary/ Release [2044 B]
Get:3 https://pkg.jenkins.io/debian-stable binary/ Release.gpg [195 B]
Ign:3 https://pkg.jenkins.io/debian-stable binary/ Release.gpg
Get:4 http://security.ubuntu.com/ubuntu bionic-security InRelease [88.7 kB]
Hit:5 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic InRelease
Hit:6 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic-updates InRelease
Hit:7 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic-backports InRelease
Reading package lists... Done
W: GPG error: https://pkg.jenkins.io/debian-stable binary/ Release: The followins couldn't be verified because the public key is not available: NO_PUBKEY 9B7D32
E: The repository 'http://pkg.jenkins.io/debian-stable binary/ Release' is not s
N: Updating from such a repository can't be done securely, and is therefore disaault.
N: See apt-secure(8) manpage for repository creation and user configuration deta
root@jmaster:/home/ubuntu# apt install jenkin -y
Reading package lists... Done
Building dependency tree
Reading state information... Done
E: Unable to locate package jenkin
root@jmaster:/home/ubuntu# apt install jenkins -y
Reading package lists... Done
Building dependency tree
Reading state information... Done
Package jenkins is not available, but is referred to by another package.
This may mean that the package is missing, has been obsoleted, or
is only available from another source

E: Package 'jenkins' has no installation candidate
root@jmaster:/home/ubuntu#
root@jmaster:/home/ubuntu# wget -q -O - https://pkg.jenkins.io/debian/jenkins-cisudo apt-key add -
OK
root@jmaster:/home/ubuntu# sudo sh -c 'echo deb http://pkg.jenkins.io/debian-sta > /etc/apt/sources.list.d/jenkins.list' sudo apt-get update
root@jmaster:/home/ubuntu# apt update
Ign:1 https://pkg.jenkins.io/debian-stable binary/ InRelease
Get:2 https://pkg.jenkins.io/debian-stable binary/ Release [2044 B]
Get:3 https://pkg.jenkins.io/debian-stable binary/ Release.gpg [195 B]
Get:4 https://pkg.jenkins.io/debian-stable binary/ Packages [17.3 kB]
Hit:5 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic InRelease
Hit:6 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic-updates InRelease
Hit:7 http://security.ubuntu.com/ubuntu bionic-security InRelease
Hit:8 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic-backports InRelease
Fetched 19.5 kB in 1s (31.2 kB/s)
Reading package lists... Done
Building dependency tree
Reading state information... Done
39 packages can be upgraded. Run 'apt list --upgradable' to see them.
root@jmaster:/home/ubuntu# apt install jenkins
Reading package lists... Done
Building dependency tree
Reading state information... Done
The following additional packages will be installed:
  daemon
The following NEW packages will be installed:
  daemon jenkins
0 upgraded, 2 newly installed, 0 to remove and 39 not upgraded.
Need to get 65.3 MB of archives.
After this operation, 66.6 MB of additional disk space will be used.
Do you want to continue? [Y/n] y
Get:1 https://pkg.jenkins.io/debian-stable binary/ jenkins 2.222.3 [65.2 MB]
Get:2 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic/universe amd64 daem6.4-1build1 [99.5 kB]
Fetched 65.3 MB in 1min 24s (773 kB/s)
Selecting previously unselected package daemon.
(Reading database ... 72591 files and directories currently installed.)
Preparing to unpack .../daemon_0.6.4-1build1_amd64.deb ...
Unpacking daemon (0.6.4-1build1) ...
Selecting previously unselected package jenkins.
Preparing to unpack .../jenkins_2.222.3_all.deb ...
Unpacking jenkins (2.222.3) ...
Setting up daemon (0.6.4-1build1) ...
Setting up jenkins (2.222.3) ...
Processing triggers for systemd (237-3ubuntu10.39) ...
Processing triggers for man-db (2.8.3-2ubuntu0.1) ...
Processing triggers for ureadahead (0.100.0-21) ...
root@jmaster:/home/ubuntu#
root@jmaster:/home/ubuntu# apt status jenkins
E: Invalid operation status
root@jmaster:/home/ubuntu# systemctl status jenkins
● jenkins.service - LSB: Start Jenkins at boot time
   Loaded: loaded (/etc/init.d/jenkins; generated)
   Active: active (exited) since Sun 2020-05-17 14:16:29 UTC; 4min 45s ago
     Docs: man:systemd-sysv-generator(8)
    Tasks: 0 (limit: 1152)
   CGroup: /system.slice/jenkins.service

May 17 14:16:28 jmaster systemd[1]: Starting LSB: Start Jenkins at boot time...
May 17 14:16:28 jmaster jenkins[8435]: Correct java version found
May 17 14:16:28 jmaster jenkins[8435]:  * Starting Jenkins Automation Server jen
May 17 14:16:28 jmaster su[8481]: Successful su for jenkins by root
May 17 14:16:28 jmaster su[8481]: + ??? root:jenkins
May 17 14:16:28 jmaster su[8481]: pam_unix(su:session): session opened for user
May 17 14:16:28 jmaster su[8481]: pam_unix(su:session): session closed for user
May 17 14:16:29 jmaster jenkins[8435]:    ...done.
May 17 14:16:29 jmaster systemd[1]: Started LSB: Start Jenkins at boot time.
 ESC
root@jmaster:/home/ubuntu# cat /var/lib/jenkins/secrets/initialAdminPassword
5f233722d76247bfb03310b798535d2f
root@jmaster:/home/ubuntu#
Remote side unexpectedly closed network connection

────────────────────────────────────────────────────────────────────────────────

Session stopped
    - Press <return> to exit tab
    - Press R to restart session
    - Press S to save terminal output to file
Authenticating with public key "Imported-Openssh-Key: C:\\Users\\M1032711\\Deps Course\\AWSNitinTest.pem"
     ┌────────────────────────────────────────────────────────────────────┐
     │                        • MobaXterm 20.2 •                          │
     │            (SSH client, X-server and networking tools)             │
     │                                                                    │
     │ ➤ SSH session to ubuntu@13.127.177.162                             │
     │   • SSH compression : ✔                                            │
     │   • SSH-browser     : ✔                                            │
     │   • X11-forwarding  : ✔  (remote display is forwarded through SSH) │
     │   • DISPLAY         : ✔  (automatically set on remote server)      │
     │                                                                    │
     │ ➤ For more info, ctrl+click on help or visit our website           │
     └────────────────────────────────────────────────────────────────────┘

Welcome to Ubuntu 18.04.4 LTS (GNU/Linux 4.15.0-1065-aws x86_64)

 * Documentation:  https://help.ubuntu.com
 * Management:     https://landscape.canonical.com
 * Support:        https://ubuntu.com/advantage

  System information as of Sun May 17 14:32:50 UTC 2020

  System load:  0.0               Processes:           93
  Usage of /:   24.3% of 7.69GB   Users logged in:     0
  Memory usage: 51%               IP address for eth0: 172.31.7.75
  Swap usage:   0%


44 packages can be updated.
25 updates are security updates.


Last login: Sun May 17 14:01:01 2020 from 157.45.197.91
ubuntu@jmaster:~$
ubuntu@jmaster:~$ sudo su
root@jmaster:/home/ubuntu# vi /etc/sudoers
root@jmaster:/home/ubuntu#
Remote side unexpectedly closed network connection

────────────────────────────────────────────────────────────────────────────────

Session stopped
    - Press <return> to exit tab
    - Press R to restart session
    - Press S to save terminal output to file
Authenticating with public key "Imported-Openssh-Key: C:\\Users\\M1032711\\Deps Course\\AWSNitinTest.pem"
     ┌────────────────────────────────────────────────────────────────────┐
     │                        • MobaXterm 20.2 •                          │
     │            (SSH client, X-server and networking tools)             │
     │                                                                    │
     │ ➤ SSH session to ubuntu@13.127.177.162                             │
     │   • SSH compression : ✔                                            │
     │   • SSH-browser     : ✔                                            │
     │   • X11-forwarding  : ✔  (remote display is forwarded through SSH) │
     │   • DISPLAY         : ✔  (automatically set on remote server)      │
     │                                                                    │
     │ ➤ For more info, ctrl+click on help or visit our website           │
     └────────────────────────────────────────────────────────────────────┘

Welcome to Ubuntu 18.04.4 LTS (GNU/Linux 4.15.0-1065-aws x86_64)

 * Documentation:  https://help.ubuntu.com
 * Management:     https://landscape.canonical.com
 * Support:        https://ubuntu.com/advantage

  System information as of Sun May 17 14:47:57 UTC 2020

  System load:  0.0               Processes:           92
  Usage of /:   24.3% of 7.69GB   Users logged in:     0
  Memory usage: 51%               IP address for eth0: 172.31.7.75
  Swap usage:   0%


44 packages can be updated.
25 updates are security updates.


Last login: Sun May 17 14:32:51 2020 from 157.45.197.91
ubuntu@jmaster:~$ sudo su
root@jmaster:/home/ubuntu#
root@jmaster:/home/ubuntu# cd /var/lib/jenkins/workspace/first-job
root@jmaster:/var/lib/jenkins/workspace/first-job# ls
root@jmaster:/var/lib/jenkins/workspace/first-job# systemctl status apache2
● apache2.service - The Apache HTTP Server
   Loaded: loaded (/lib/systemd/system/apache2.service; enabled; vendor preset:
  Drop-In: /lib/systemd/system/apache2.service.d
           └─apache2-systemd.conf
   Active: active (running) since Sun 2020-05-17 14:49:41 UTC; 1min 15s ago
 Main PID: 9900 (apache2)
    Tasks: 55 (limit: 1152)
   CGroup: /system.slice/apache2.service
           ├─9900 /usr/sbin/apache2 -k start
           ├─9902 /usr/sbin/apache2 -k start
           └─9903 /usr/sbin/apache2 -k start

May 17 14:49:41 jmaster systemd[1]: Starting The Apache HTTP Server...
May 17 14:49:41 jmaster systemd[1]: Started The Apache HTTP Server.
root@jmaster:/var/lib/jenkins/workspace/first-job#
Remote side unexpectedly closed network connection

────────────────────────────────────────────────────────────────────────────────

Session stopped
    - Press <return> to exit tab
    - Press R to restart session
    - Press S to save terminal output to file
Authenticating with public key "Imported-Openssh-Key: C:\\Users\\M1032711\\Desktop\\DevOps Course\\AWSNitinTest.pem"
     ┌────────────────────────────────────────────────────────────────────┐
     │                        • MobaXterm 20.2 •                          │
     │            (SSH client, X-server and networking tools)             │
     │                                                                    │
     │ ➤ SSH session to ubuntu@13.127.177.162                             │
     │   • SSH compression : ✔                                            │
     │   • SSH-browser     : ✔                                            │
     │   • X11-forwarding  : ✔  (remote display is forwarded through SSH) │
     │   • DISPLAY         : ✔  (automatically set on remote server)      │
     │                                                                    │
     │ ➤ For more info, ctrl+click on help or visit our website           │
     └────────────────────────────────────────────────────────────────────┘

Welcome to Ubuntu 18.04.4 LTS (GNU/Linux 4.15.0-1065-aws x86_64)

 * Documentation:  https://help.ubuntu.com
 * Management:     https://landscape.canonical.com
 * Support:        https://ubuntu.com/advantage

  System information as of Sun May 17 15:32:33 UTC 2020

  System load:  0.0               Processes:           95
  Usage of /:   24.4% of 7.69GB   Users logged in:     0
  Memory usage: 54%               IP address for eth0: 172.31.7.75
  Swap usage:   0%


44 packages can be updated.
25 updates are security updates.


Last login: Sun May 17 14:47:57 2020 from 157.45.197.91
ubuntu@jmaster:~$ sudo su
root@jmaster:/home/ubuntu#
root@jmaster:/home/ubuntu# apt install docker -y
Reading package lists... Done
Building dependency tree
Reading state information... Done
The following NEW packages will be installed:
  docker
0 upgraded, 1 newly installed, 0 to remove and 39 not upgraded.
Need to get 12.9 kB of archives.
After this operation, 45.1 kB of additional disk space will be used.
Get:1 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic/universe amd64 docker amd64 1.5-1build1 [12.9 kB]
Fetched 12.9 kB in 1s (15.6 kB/s)
Selecting previously unselected package docker.
(Reading database ... 73325 files and directories currently installed.)
Preparing to unpack .../docker_1.5-1build1_amd64.deb ...
Unpacking docker (1.5-1build1) ...
Setting up docker (1.5-1build1) ...
Processing triggers for man-db (2.8.3-2ubuntu0.1) ...
root@jmaster:/home/ubuntu# docker version

Command 'docker' not found, but can be installed with:

snap install docker     # version 18.09.9, or
apt  install docker.io

See 'snap info docker' for additional versions.

root@jmaster:/home/ubuntu# apt install docker.io -y
Reading package lists... Done
Building dependency tree
Reading state information... Done
The following additional packages will be installed:
  bridge-utils cgroupfs-mount containerd pigz runc ubuntu-fan
Suggested packages:
  ifupdown aufs-tools debootstrap docker-doc rinse zfs-fuse | zfsutils
The following NEW packages will be installed:
  bridge-utils cgroupfs-mount containerd docker.io pigz runc ubuntu-fan
0 upgraded, 7 newly installed, 0 to remove and 39 not upgraded.
Need to get 63.8 MB of archives.
After this operation, 319 MB of additional disk space will be used.
Get:1 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic/universe amd64 pigz amd64 2.4-1 [57.4 kB]
Get:2 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic/main amd64 bridge-utils amd64 1.5-15ubuntu1 [30.1 kB]
Get:3 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic/universe amd64 cgroupfs-mount all 1.4 [6320 B]
Get:4 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic-updates/universe amd64 runc amd64 1.0.0~rc10-0ubuntu1~18.04.2 [2000 kB]
Get:5 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic-updates/universe amd64 containerd amd64 1.3.3-0ubuntu1~18.04.2 [21.7 MB]
Get:6 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic-updates/universe amd64 docker.io amd64 19.03.6-0ubuntu1~18.04.1 [39.9 MB]
Get:7 http://ap-south-1.ec2.archive.ubuntu.com/ubuntu bionic/main amd64 ubuntu-fan all 0.12.10 [34.7 kB]
Fetched 63.8 MB in 19s (3372 kB/s)
Preconfiguring packages ...
Selecting previously unselected package pigz.
(Reading database ... 73332 files and directories currently installed.)
Preparing to unpack .../0-pigz_2.4-1_amd64.deb ...
Unpacking pigz (2.4-1) ...
Selecting previously unselected package bridge-utils.
Preparing to unpack .../1-bridge-utils_1.5-15ubuntu1_amd64.deb ...
Unpacking bridge-utils (1.5-15ubuntu1) ...
Selecting previously unselected package cgroupfs-mount.
Preparing to unpack .../2-cgroupfs-mount_1.4_all.deb ...
Unpacking cgroupfs-mount (1.4) ...
Selecting previously unselected package runc.
Preparing to unpack .../3-runc_1.0.0~rc10-0ubuntu1~18.04.2_amd64.deb ...
Unpacking runc (1.0.0~rc10-0ubuntu1~18.04.2) ...
Selecting previously unselected package containerd.
Preparing to unpack .../4-containerd_1.3.3-0ubuntu1~18.04.2_amd64.deb ...
Unpacking containerd (1.3.3-0ubuntu1~18.04.2) ...
Selecting previously unselected package docker.io.
Preparing to unpack .../5-docker.io_19.03.6-0ubuntu1~18.04.1_amd64.deb ...
Unpacking docker.io (19.03.6-0ubuntu1~18.04.1) ...
Selecting previously unselected package ubuntu-fan.
Preparing to unpack .../6-ubuntu-fan_0.12.10_all.deb ...
Unpacking ubuntu-fan (0.12.10) ...
Setting up runc (1.0.0~rc10-0ubuntu1~18.04.2) ...
Setting up cgroupfs-mount (1.4) ...
Setting up containerd (1.3.3-0ubuntu1~18.04.2) ...
Created symlink /etc/systemd/system/multi-user.target.wants/containerd.service → /lib/systemd/system/containerd.service.
Setting up bridge-utils (1.5-15ubuntu1) ...
Setting up ubuntu-fan (0.12.10) ...
Created symlink /etc/systemd/system/multi-user.target.wants/ubuntu-fan.service → /lib/systemd/system/ubuntu-fan.service.
Setting up pigz (2.4-1) ...
Setting up docker.io (19.03.6-0ubuntu1~18.04.1) ...
Adding group `docker' (GID 117) ...
Done.
Created symlink /etc/systemd/system/sockets.target.wants/docker.socket → /lib/systemd/system/docker.socket.
docker.service is a disabled or a static unit, not starting it.
Processing triggers for systemd (237-3ubuntu10.39) ...
Processing triggers for man-db (2.8.3-2ubuntu0.1) ...
Processing triggers for ureadahead (0.100.0-21) ...
root@jmaster:/home/ubuntu#
root@jmaster:/home/ubuntu# docker swarm init
Swarm initialized: current node (po58u9b10qil8mn9ftrtmo8yi) is now a manager.

To add a worker to this swarm, run the following command:

    docker swarm join --token SWMTKN-1-1hzpyfmt3vfb6ofjr5psyew0rte1409ohyj0ws3ulrdvcui89h-6ogslydr3mqb8mivb8juksnyo 172.31.7.75:2377

To add a manager to this swarm, run 'docker swarm join-token manager' and follow the instructions.

root@jmaster:/home/ubuntu# docker service create --name webservice -p 80:80 ramansharma95/webapp
2tqumc2zo9lh54j2bnf7p0anu
overall progress: 1 out of 1 tasks
1/1: running
verify: Service converged
root@jmaster:/home/ubuntu# docker service ls
ID                  NAME                MODE                REPLICAS            IMAGE                         PORTS
2tqumc2zo9lh        webservice          replicated          1/1                 ramansharma95/webapp:latest   *:80->80/tcp
root@jmaster:/home/ubuntu# docker service create --name webservice -p 80:80 ramansharma95/mysql
Error response from daemon: rpc error: code = InvalidArgument desc = port '80' is already in use by service 'webservice' (2tqumc2zo9lh54j2bnf7p0anu) as an ingress port
root@jmaster:/home/ubuntu# docker service create --name db ramansharma95/mysql\ > ^C
root@jmaster:/home/ubuntu# docker service create --name db ramansharma95/mysql
pn4jefs2toe2xe6hp66pgljjp
overall progress: 1 out of 1 tasks
1/1: running
verify: Service converged
root@jmaster:/home/ubuntu# apt purge apache2
Reading package lists... Done
Building dependency tree
Reading state information... Done
The following packages were automatically installed and are no longer required:
  apache2-bin apache2-data apache2-utils libapr1 libaprutil1
  libaprutil1-dbd-sqlite3 libaprutil1-ldap liblua5.2-0 ssl-cert
Use 'sudo apt autoremove' to remove them.
The following packages will be REMOVED:
  apache2*
0 upgraded, 0 newly installed, 1 to remove and 39 not upgraded.
After this operation, 535 kB disk space will be freed.
Do you want to continue? [Y/n] y
(Reading database ... 73663 files and directories currently installed.)
Removing apache2 (2.4.29-1ubuntu4.13) ...
Processing triggers for man-db (2.8.3-2ubuntu0.1) ...
Processing triggers for ufw (0.36-0ubuntu0.18.04.1) ...
(Reading database ... 73611 files and directories currently installed.)
Purging configuration files for apache2 (2.4.29-1ubuntu4.13) ...
Processing triggers for ureadahead (0.100.0-21) ...
Processing triggers for systemd (237-3ubuntu10.39) ...
Processing triggers for ufw (0.36-0ubuntu0.18.04.1) ...
root@jmaster:/home/ubuntu# docker ps
CONTAINER ID        IMAGE                         COMMAND                  CREATED              STATUS              PORTS               NAMES
c641b46962b8        ramansharma95/mysql:latest    "docker-entrypoint.s…"   About a minute ago   Up About a minute   3306/tcp            db.1.97x139wp5c7322837n9dygyed
9f7571a15361        ramansharma95/webapp:latest   "/bin/sh -c 'apachec…"   2 minutes ago        Up 2 minutes        80/tcp              webservice.1.x4hvaj1ok3hnbtm9xo9ocxvan
root@jmaster:/home/ubuntu# docker exec -t c641b46962b8
"docker exec" requires at least 2 arguments.
See 'docker exec --help'.

Usage:  docker exec [OPTIONS] CONTAINER COMMAND [ARG...]

Run a command in a running container
root@jmaster:/home/ubuntu# docker exec -it c641b46962b8
"docker exec" requires at least 2 arguments.
See 'docker exec --help'.

Usage:  docker exec [OPTIONS] CONTAINER COMMAND [ARG...]

Run a command in a running container
root@jmaster:/home/ubuntu# docker ps
CONTAINER ID        IMAGE                         COMMAND                  CREAT
c641b46962b8        ramansharma95/mysql:latest    "docker-entrypoint.s…"   About
9f7571a15361        ramansharma95/webapp:latest   "/bin/sh -c 'apachec…"   3 min
root@jmaster:/home/ubuntu# docker exec -it c641b46962b8
"docker exec" requires at least 2 arguments.
See 'docker exec --help'.

Usage:  docker exec [OPTIONS] CONTAINER COMMAND [ARG...]

Run a command in a running container
root@jmaster:/home/ubuntu# docker exec --help

Usage:  docker exec [OPTIONS] CONTAINER COMMAND [ARG...]

Run a command in a running container

Options:
  -d, --detach               Detached mode: run command in the background
      --detach-keys string   Override the key sequence for detaching a
                             container
  -e, --env list             Set environment variables
  -i, --interactive          Keep STDIN open even if not attached
      --privileged           Give extended privileges to the command
  -t, --tty                  Allocate a pseudo-TTY
  -u, --user string          Username or UID (format:
                             <name|uid>[:<group|gid>])
  -w, --workdir string       Working directory inside the container
root@jmaster:/home/ubuntu# docker exec -it 9f7571a15361 bash
root@9f7571a15361:/# exit
exit
root@jmaster:/home/ubuntu# docker ps
CONTAINER ID        IMAGE                         COMMAND                  CREATED             STATUS              PORTS               NAMES
9f4daf531330        ramansharma95/mysql:latest    "docker-entrypoint.s…"   31 seconds ago      Up 30 seconds       3306/tcp            db.1.ykorfi3j0p0do7tjrscvhq4tf
03c8ae8de5da        ramansharma95/webapp:latest   "/bin/sh -c 'apachec…"   42 seconds ago      Up 40 seconds       80/tcp              webservice.1.vp8rjkpbcwyvm8yadb9y3xtc5
root@jmaster:/home/ubuntu# docker exec -it 03c8ae8de5da bash
root@03c8ae8de5da:/# vi /var/www/html/index.html
root@03c8ae8de5da:/# ls
bin   demo  etc   lib    media  opt   root  sbin  sys  usr
boot  dev   home  lib64  mnt    proc  run   srv   tmp  var
root@03c8ae8de5da:/# vi /var/www/html/index.php
$dbname = "company";
$name=$_POST["name"];
$phone=$_POST["mobile"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO employee (name, mobile)
VALUES ('".$name."', '".$phone."')";

if ($conn->query($sql) === TRUE) {
    echo  "Record created successfully" ;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
?>
</head>
<body>
<h2> Employee Registration Form </h2>
<form action="index.php" method="POST">
        <div class="imgcontainer">
    <img src="image.png" alt="Avatar" class="avatar">
  </div>

<div class="container">
    <label for="name"><b>Employee Name</b></label>
    <input type="text" placeholder="Enter Username" name="name" required>
     <br />
    <label for="mobile"><b>Mobile Number</b></label>
    <input type="text" placeholder="Enter mobile" name="mobile" required>
     <br />
    <button type="submit">Add Employee</button>
  </div>

        </form>
</body>
</html>
