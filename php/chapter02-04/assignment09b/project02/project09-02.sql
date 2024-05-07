Cnvert the php/myusql query below to a regular mysql query

"SELECT a.caption, b.img_loc " .
           "FROM captions a " . // Added space after "captions"
           "INNER JOIN images b ON a.caption_id = b.caption_id " . // Added space after "images"
           "WHERE a.caption_id = b.caption_id";
 $result = mysqli_query($conn, $cmd);
    // Fetch data and store in arrays
    while ($row = mysqli_fetch_assoc($result)) {
        list($cap, $img) = array_values($row);
        $caps[] = $cap;
        $imgs[] = $img;
    }

    // Free result set
    mysqli_free_result($result);
    mysqli_close($conn);


Once you have converted the query above launch XAMPP and using PhpMyAdmin select the web19101 database and run the query in the SQL tab and copy and paste the results below.


International Space Station fourth expansion [2009...
img/slide0.jpg
Assembling the International Space Station [1998]
img/slide1.jpg
The Atlantis docks with the ISS [2001]
img/slide2.jpg
The Atlantis approaches the ISS [2000]
img/slide3.jpg
The Atlantis approaches the ISS [2000]
img/slide4.jpg
International Space Station over Earth [2002]
img/slide5.jpg
The International Space Station first expansion [2...
img/slide6.jpg
Hurricane Ivan from the ISS [2008]
img/slide7.jpg
The Soyuz spacecraft approaches the ISS [2005]
img/slide8.jpg
The International Space Station from above [2006]
img/slide9.jpg
Maneuvering in space with the Canadarm2 [2006]
img/slide10.jpg
The International Space Station second expansion [...
img/slide11.jpg
The International Space Station third expansion [2...
img/slide12.jpg
The ISS over the Ionian Sea [2007]
img/slide13.jpg