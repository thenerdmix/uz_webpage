#!/bin/bash
rm archivio.php
tree -H "/~fradeb/archivio" -d -C -T "Archivio" archivio | head -n -12 >> archivio.php
echo "
</body>
</html>
" >> archivio.php
