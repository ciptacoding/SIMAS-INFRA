<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title></title>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
      integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<body>
   <main class="w-100">
      <div>
         <img src="./Logo/Logo-TELKOM.png" alt="logo" style="height: 35px;">
      </div>
      <h3 class="text-center">PT. TELKOM INFRA <br> Surat Penugasan</h3>
      <div class="text-right"><span class="font-weight-bold">Tanggal: </span>{{ $suratTugas->tanggal }}</div>
      <div><span class="font-weight-bold">Keterangan: </span>{{ $suratTugas->keterangan }}</div>
      <div><span class="font-weight-bold">Kepada: </span>Ketua {{ $suratTugas->team->nama_team }}
      </div>
      <div class="mb-5"><span class="font-weight-bold">Tower: </span>{{ $suratTugas->tower->nama_tower }}
      </div>
      <div class="text-justify">{!! $suratTugas->rincian_perbaikan!!}</div>
   </main>

   <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
   </script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
   </script>
</body>

</html>