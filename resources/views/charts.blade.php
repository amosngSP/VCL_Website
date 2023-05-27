@extends('layouts.app')
@section('title','- Charts')
@section('content')



<div class="row">
  <div class="col">
    <h4>Charts</h4>
    <table id="chartsTable" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
<thead>
  <tr>
<th>ICAO</th>
<th>Link</th>
  </tr>
</thead>
<tbody><tr><td>VVTS</td>
<td><a href="https://vnaic.vn/images/stories/vnaic.vn/SanPhamDichVu/AIPVietNam/Related%20Links/2023-01-AMDT/html/eAIP/AD-2.VVTS-en-GB.html#VVTS-AD-2.24" target="_blank">https://vnaic.vn/images/stories/vnaic.vn/SanPhamDichVu/AIPVietNam/Related%20Links/2023-01-AMDT/html/eAIP/AD-2.VVTS-en-GB.html#VVTS-AD-2.24</a></td>
</tr>
<tr><td>VVNB</td>
<td><a href="https://vnaic.vn/images/stories/vnaic.vn/SanPhamDichVu/AIPVietNam/Related%20Links/2023-01-AMDT/html/eAIP/AD-2.VVNB-en-GB.html#VVNB-AD-2.24" target="_blank">https://vnaic.vn/images/stories/vnaic.vn/SanPhamDichVu/AIPVietNam/Related%20Links/2023-01-AMDT/html/eAIP/AD-2.VVNB-en-GB.html#VVNB-AD-2.24</a></td>
</tr>
<tr><td>VVDN</td>
<td><a href="https://vnaic.vn/images/stories/vnaic.vn/SanPhamDichVu/AIPVietNam/Related%20Links/2023-01-AMDT/html/eAIP/AD-2.VVDN-en-GB.html#VVDN-AD-2.24" target="_blank">https://vnaic.vn/images/stories/vnaic.vn/SanPhamDichVu/AIPVietNam/Related%20Links/2023-01-AMDT/html/eAIP/AD-2.VVDN-en-GB.html#VVDN-AD-2.24</a></td>
</tr>
<tr><td>VVVD</td>
<td><a href="https://vnaic.vn/images/stories/vnaic.vn/SanPhamDichVu/AIPVietNam/Related%20Links/2023-01-AMDT/html/eAIP/AD-2.VVVD-en-GB.html#VVVD-AD-2.24" target="_blank">https://vnaic.vn/images/stories/vnaic.vn/SanPhamDichVu/AIPVietNam/Related%20Links/2023-01-AMDT/html/eAIP/AD-2.VVVD-en-GB.html#VVVD-AD-2.24</a></td>
</tr>
<tr><td>VVPQ</td>
<td><a href="https://vnaic.vn/images/stories/vnaic.vn/SanPhamDichVu/AIPVietNam/Related%20Links/2023-01-AMDT/html/eAIP/AD-2.VVPQ-en-GB.html#VVPQ-AD-2.24" target="_blank">https://vnaic.vn/images/stories/vnaic.vn/SanPhamDichVu/AIPVietNam/Related%20Links/2023-01-AMDT/html/eAIP/AD-2.VVPQ-en-GB.html#VVPQ-AD-2.24</a></td>
</tr>
<tr><td>VVPB</td>
<td><a href="https://vnaic.vn/images/stories/vnaic.vn/SanPhamDichVu/AIPVietNam/Related%20Links/2023-01-AMDT/html/eAIP/AD-2.VVPB-en-GB.html#VVPB-AD-2.24" target="_blank">https://vnaic.vn/images/stories/vnaic.vn/SanPhamDichVu/AIPVietNam/Related%20Links/2023-01-AMDT/html/eAIP/AD-2.VVPB-en-GB.html#VVPB-AD-2.24</a></td>
</tr>
<tr><td>VVCR</td>
<td><a href="https://vnaic.vn/images/stories/vnaic.vn/SanPhamDichVu/AIPVietNam/Related%20Links/2023-01-AMDT/html/eAIP/AD-2.VVCR-en-GB.html#VVCR-AD-2.24" target="_blank">https://vnaic.vn/images/stories/vnaic.vn/SanPhamDichVu/AIPVietNam/Related%20Links/2023-01-AMDT/html/eAIP/AD-2.VVCR-en-GB.html#VVCR-AD-2.24</a></td>
</tr>
<tr><td>All Cambodia (VD**) Airports</td>
<td><a href="http://www.civilaviation.gov.kh/images/pdf/ANS/AIP_SUP_2021/AD.pdf" target="_blank">http://www.civilaviation.gov.kh/images/pdf/ANS/AIP_SUP_2021/AD.pdf</a></td>
</tr>
</tbody>
</table>
  </div>
</div>



@endsection
@section('addon_scripts')

<script type="text/javascript">
$(document).ready(function () {
  $('#chartsTable').DataTable();
  $('.dataTables_length').addClass('bs-select');
});
</script>
@endsection
