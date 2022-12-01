<h1>
    Ini halaman view dari Profile
    <br>
    halo, <?php echo $name; ?>
    <!-- Versi PHP Native -->
    <br>
    Hai, Alifa
    <!-- Versi Blade Laravel  -->

</h1>
<hr>
<h2>Profile Information</h2>
<p>
    Name : {{ $name }}<br>
    Phone : {{ $phone }}<br>
    Position : {{ $position }}<br>
    Born : {{ $born }}<br>
    jenis kelamin : {{ $jk }}<br>
    school : {{ $School }}
</p>