create view barang as 
select tbarang.idbarang, tbarang.nmbarang, tjenis.jenisbarang, tbarang.stok, tbarang.harga, tdistributor.iddist tbarang.status, tdistributor.nmdist
from tbarang join tjenis
on tbarang.idjenis=tjenis.idjenis
join tdistributor
on tbarang.iddist=tdistributor.iddist

