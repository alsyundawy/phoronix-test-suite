#!/bin/sh

chmod +x et-linux-2.60.x86.run
./et-linux-2.60.x86.run --target et_ --noexec

tar -xvf et-demos-1.tar.gz
mv -f pts-etconfig.cfg et_/etmain/
mkdir et_/etmain/demos/
mv -f railgun.dm_83 et_/etmain/demos/

echo "#!/bin/sh
cd et_/
./bin/Linux/x86/et.x86 \$@ 2>&1 | grep fps
" > et
chmod +x et
