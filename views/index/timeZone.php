<?php

?>
<!DOCTYPE html>
<html lang="en">

<body>
    <!--<div id="offsetClock" class="clock">00:00:00</div>-->
    <div class="dropdown">
        <select name="timezoneoffset" id="timezoneoffset" class="form-control">
            <option value="-12,0">(GMT -12:00) Eniwetok, Kwajalein</option>
            <option value="-11,0">(GMT -11:00) Midway Island, Samoa</option>
            <option value="-10,0">(GMT -10:00) Hawaii</option>
            <option value="-9,30">(GMT -9:30) Taiohae</option>
            <option value="-9,0">(GMT -9:00) Alaska</option>
            <option value="-8,0">(GMT -8:00) Pacific Time (US &amp; Canada)</option>
            <option value="-7,0">(GMT -7:00) Mountain Time (US &amp; Canada)</option>
            <option value="-6,0">(GMT -6:00) Central Time (US &amp; Canada), Mexico City</option>
            <option value="-5,0" selected="selected">(GMT -5:00) Eastern Time (US &amp; Canada), Bogota, Lima</option>
            <option value="-5,30">(GMT -4:30) Caracas</option>
            <option value="-4,0">(GMT -4:00) Atlantic Time (Canada), Caracas, La Paz</option>
            <option value="-4,30">(GMT -3:30) Newfoundland</option>
            <option value="-3,0">(GMT -3:00) Brazil, Buenos Aires, Georgetown</option>
            <option value="-2,0">(GMT -2:00) Mid-Atlantic</option>
            <option value="-1,0">(GMT -1:00) Azores, Cape Verde Islands</option>
            <option value="0,0" >(GMT) Western Europe Time, London, Lisbon, Casablanca</option>
            <option value="+1,0">(GMT +1:00) Brussels, Copenhagen, Madrid, Paris</option>
            <option value="+2,0">(GMT +2:00) Kaliningrad, South Africa</option>
            <option value="+3,0">(GMT +3:00) Baghdad, Riyadh, Moscow, St. Petersburg</option>
            <option value="+3,30">(GMT +3:30) Tehran</option>
            <option value="+4,0">(GMT +4:00) Abu Dhabi, Muscat, Baku, Tbilisi</option>
            <option value="+4,30">(GMT +4:30) Kabul</option>
            <option value="+5,0">(GMT +5:00) Ekaterinburg, Islamabad, Karachi, Tashkent</option>
            <option value="+5,30">(GMT +5:30) Bombay, Calcutta, Madras, New Delhi</option>
            <option value="+5,45">(GMT +5:45) Kathmandu, Pokhara</option>
            <option value="+6,0">(GMT +6:00) Almaty, Dhaka, Colombo</option>
            <option value="+6,30">(GMT +6:30) Yangon, Mandalay</option>
            <option value="+7,0">(GMT +7:00) Bangkok, Hanoi, Jakarta</option>
            <option value="+8,0">(GMT +8:00) Beijing, Perth, Singapore, Hong Kong</option>
            <option value="+8,45">(GMT +8:45) Eucla</option>
            <option value="+9,0">(GMT +9:00) Tokyo, Seoul, Osaka, Sapporo, Yakutsk</option>
            <option value="+9,30">(GMT +9:30) Adelaide, Darwin</option>
            <option value="+10,0">(GMT +10:00) Eastern Australia, Guam, Vladivostok</option>
            <option value="+10,30">(GMT +10:30) Lord Howe Island</option>
            <option value="+11,0">(GMT +11:00) Magadan, Solomon Islands, New Caledonia</option>
            <option value="+11,30">(GMT +11:30) Norfolk Island</option>
            <option value="+12,0">(GMT +12:00) Auckland, Wellington, Fiji, Kamchatka</option>
            <option value="+12,45">(GMT +12:45) Chatham Islands</option>
            <option value="+13,0">(GMT +13:00) Apia, Nukualofa</option>
            <option value="+14,0">(GMT +14:00) Line Islands, Tokelau</option>
        </select>
       
<br>
   <button onclick = " resetTime(); showTheTime(timezoneoffset.value);" class="btn btn-outline-primary">Set 12 Hr.</button>
    <button onclick = " resetTime(); showTheTime24(timezoneoffset.value);" class="btn btn-outline-primary">Set 24 Hr. </button>
 

    </div>
</body>

</html>
