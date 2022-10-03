<?php
echo "</head>\n";
echo "<body>\n";
echo "<div class=\"body-text\">Write your name in the right fields. Also write your imaginary card number. By clicking CCV field card will turn.</div>\n";
echo "  <form>\n";
echo "    <div class=\"form-container\">\n";
echo "      <div class=\"personal-information\">\n";
echo "        <h1>Payment Information</h1>\n";
echo "      </div> <!-- end of personal-information -->\n";
echo "           \n";
echo "          <input id=\"column-left\" type=\"text\" name=\"first-name\" placeholder=\"First Name\"/>\n";
echo "          <input id=\"column-right\" type=\"text\" name=\"last-name\" placeholder=\"Surname\"/>\n";
echo "          <input id=\"input-field\" type=\"text\" name=\"number\" placeholder=\"Card Number\"/>\n";
echo "          <input id=\"column-left\" type=\"text\" name=\"expiry\" placeholder=\"MM / YY\"/>\n";
echo "          <input id=\"column-right\" type=\"text\" name=\"cvc\" placeholder=\"CCV\"/>\n";
echo "         \n";
echo "          <div class=\"card-wrapper\"></div>\n";
echo "      \n";
echo "          <input id=\"input-field\" type=\"text\" name=\"streetaddress\" required=\"required\" autocomplete=\"on\" maxlength=\"45\" placeholder=\"Streed Address\"/>\n";
echo "          <input id=\"column-left\" type=\"text\" name=\"city\" required=\"required\" autocomplete=\"on\" maxlength=\"20\" placeholder=\"City\"/>\n";
echo "          <input id=\"column-right\" type=\"text\" name=\"zipcode\" required=\"required\" autocomplete=\"on\" pattern=\"[0-9]*\" maxlength=\"5\" placeholder=\"ZIP code\"/>\n";
echo "          <input id=\"input-field\" type=\"email\" name=\"email\" required=\"required\" autocomplete=\"on\" maxlength=\"40\" placeholder=\"Email\"/>\n";
echo "          <input id=\"input-button\" type=\"submit\" value=\"Submit\"/>\n";
echo "        \n";
echo "    </form>\n";
echo "  </div>\n";
?>