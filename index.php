<html>
	<head>
		<title>Primary Music</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
		<link href="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/themes/ui-lightness/jquery-ui.min.css" rel="stylesheet" media="screen">
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js" type="text/javascript"></script>
		<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
	</head>

	<body class="container">
		<a href="https://github.com/curtisgibby/primary-music" class="hidden-print"><img style="position: absolute; top: 0; right: 0; border: 0;" src="https://s3.amazonaws.com/github/ribbons/forkme_right_green_007200.png" alt="Fork me on GitHub"></a>

		<div class="page-header">
			<h1><span class="glyphicon glyphicon-music"></span> Primary Music</h1>
		</div>

		<p>This page is intended to help LDS Primary music leaders select music for their Primary meetings. Choose a date (defaults to "Next Sunday"), then tab through the song fields, typing a word or number and picking songs from the pop-up, and submit the form. Then print the results or copy-paste them in an email to your accompanists. You can enter as many or as few songs in the Sharing Time section as you like.</p>

		<form name="music" class="form-horizontal" role="form" action="post.php" method="post">
		<div class="form-group">
		  <div class="col-md-12">
			<label for="Date">Date</label>
			<input type="text" class="form-control" id="Date" value="<?php echo date("m/d/Y", strtotime("Next Sunday"))?>" name="Date">
		  </div>
		</div>

		<div class="form-group">
		  <div class="col-md-6">
			<label for="WelcomeSong">Welcome Song</label>
			<input type="text" class="form-control auto-complete" id="WelcomeSong" name="WelcomeSong">
		  </div>
		  <div class="col-md-6">
			<label for="OpeningSong">Opening Song</label>
			<input type="text" class="form-control auto-complete" id="OpeningSong" name="OpeningSong">
		  </div>
		</div>
		<div class="form-group">
		  <div class="col-md-6">
			<label for="BirthdaySong">Birthday Song</label>
			<input type="text" class="form-control auto-complete" id="BirthdaySong" name="BirthdaySong">
		  </div>
		  <div class="col-md-6">
			<label for="ReverenceSong">Reverence Song</label>
			<input type="text" class="form-control auto-complete" id="ReverenceSong" name="ReverenceSong">
		  </div>
		</div>
		<h3>Singing Time</h3>
		<div class="form-group">
		  <div class="col-md-4">
			<label for="SingingTime1">#1</label>
			<input type="text" class="form-control auto-complete" id="SingingTime1" name="SingingTime[]">
		  </div>
		  <div class="col-md-4">
			<label for="SingingTime2">#2</label>
			<input type="text" class="form-control auto-complete" id="SingingTime2" name="SingingTime[]">
		  </div>
		  <div class="col-md-4">
			<label for="SingingTime3">#3</label>
			<input type="text" class="form-control auto-complete" id="SingingTime3" name="SingingTime[]">
		  </div>
	  </div>
	  <div class="form-group">
		  <div class="col-md-4">
			<label for="SingingTime4">#4</label>
			<input type="text" class="form-control auto-complete" id="SingingTime4" name="SingingTime[]">
		  </div>
		  <div class="col-md-4">
			<label for="SingingTime5">#5</label>
			<input type="text" class="form-control auto-complete" id="SingingTime5" name="SingingTime[]">
		  </div>
		  <div class="col-md-4">
			<label for="SingingTime6">#6</label>
			<input type="text" class="form-control auto-complete" id="SingingTime6" name="SingingTime[]">
		  </div>
		</div>
		<div class="form-group">
		  <div class="col-md-4">
			<label for="SingingTime7">#7</label>
			<input type="text" class="form-control auto-complete" id="SingingTime7" name="SingingTime[]">
		  </div>
		  <div class="col-md-4">
			<label for="SingingTime8">#8</label>
			<input type="text" class="form-control auto-complete" id="SingingTime8" name="SingingTime[]">
		  </div>
		  <div class="col-md-4">
			<label for="SingingTime9">#9</label>
			<input type="text" class="form-control auto-complete" id="SingingTime9" name="SingingTime[]">
		  </div>
		</div>
		<div class="form-group">
		  <div class="col-md-4">
			<label for="SingingTime10">#10</label>
			<input type="text" class="form-control auto-complete" id="SingingTime10" name="SingingTime[]">
		  </div>
		  <div class="col-md-4">
			<label for="SingingTime11">#11</label>
			<input type="text" class="form-control auto-complete" id="SingingTime11" name="SingingTime[]">
		  </div>
		  <div class="col-md-4">
			<label for="SingingTime12">#12</label>
			<input type="text" class="form-control auto-complete" id="SingingTime12" name="SingingTime[]">
		  </div>
		</div>
		<div class="form-group">
		  <div class="col-md-6">
			<label for="ClosingSong">Closing Song</label>
			<input type="text" class="form-control auto-complete" id="ClosingSong" name="ClosingSong">
		  </div>
		</div>
		  <button type="submit" class="btn btn-default">Submit</button>
		</form>

<script>
	$(function() {
		var songs = [
			'If The Savior Stood Beside Me',
			'Scripture Power',
			'My Eternal Family',
			'The Family Is of God',
			'[CS 2–3] I Am a Child of God',
			'[CS 4] I Lived in Heaven',
			'[CS 5] I Know My Father Lives',
			'[CS 6] Thanks to Thee',
			'[CS 7] I Thank Thee, Dear Father',
			'[CS 8] Father, We Thank Thee for the Night',
			'[CS 9] Can a Little Child like Me?',
			'[CS 10] Thank Thee for Everything',
			'[CS 11] I’m Thankful to Be Me',
			'[CS 12–13] A Child’s Prayer',
			'[CS 14] I Pray in Faith',
			'[CS 15] If with All Your Hearts',
			'[CS 16–17] Children All Over the World',
			'[CS 18] I Need My Heavenly Father',
			'[CS 19] Heavenly Father, Now I Pray',
			'[CS 20] A Song of Thanks',
			'[CS 20] Thanks to Our Father',
			'[CS 21] For Health and Strength',
			'[CS 21] For Thy Bounteous Blessings',
			'[CS 22] A Prayer Song',
			'[CS 22] A Prayer',
			'[CS 23] Father Up Above',
			'[CS 23] Heavenly Father, While I Pray',
			'[CS 24] Thank Thee, Father',
			'[CS 25] We Bow Our Heads',
			'[CS 25] I Love to Pray',
			'[CS 26] Reverently, Quietly',
			'[CS 27] Reverence',
			'[CS 27] We Are Reverent',
			'[CS 28] I Want to Be Reverent',
			'[CS 28] I Will Try to Be Reverent',
			'[CS 29] Father, I Will Reverent Be',
			'[CS 30] This Is God’s House',
			'[CS 30] Our Chapel Is a Sacred Place',
			'[CS 31] Reverence Is Love',
			'[CS 34–35] He Sent His Son',
			'[CS 36] Samuel Tells of the Baby Jesus',
			'[CS 37] Stars Were Gleaming',
			'[CS 38–39] When Joseph Went to Bethlehem',
			'[CS 39] Little Jesus',
			'[CS 40] There Was Starlight on the Hillside',
			'[CS 40] The Shepherd’s Carol',
			'[CS 41] Once within a Lowly Stable',
			'[CS 42–43] Away in a Manger',
			'[CS 44–45] Mary’s Lullaby',
			'[CS 46] Who Is the Child?',
			'[CS 47] Sleep, Little Jesus',
			'[CS 48–49] Oh, Hush Thee, My Baby',
			'[CS 50–51] Picture a Christmas',
			'[CS 51] Have a Very Merry Christmas!',
			'[CS 52–53] The Nativity Song',
			'[CS 54] Christmas Bells',
			'[CS 55] Jesus Once Was a Little Child',
			'[CS 56] I Think When I Read That Sweet Story',
			'[CS 57] Tell Me the Stories of Jesus',
			'[CS 58] Little Lambs So White and Fair',
			'[CS 58] Jesus Is Our Loving Friend',
			'[CS 59] Jesus Loved the Little Children',
			'[CS 60–61] Jesus Wants Me for a Sunbeam',
			'[CS 61] Jesus Said Love Everyone',
			'[CS 62–63] Beautiful Savior',
			'[CS 64] Did Jesus Really Live Again?',
			'[CS 65] He Died That We Might Live Again',
			'[CS 66–67] Hosanna',
			'[CS 68–69] Easter Hosanna',
			'[CS 70] Jesus Has Risen',
			'[CS 71] To Think about Jesus',
			'[CS 72] The Sacrament',
			'[CS 73] Before I Take the Sacrament',
			'[CS 73] Help Us, O God, to Understand',
			'[CS 74–75] I Feel My Savior’s Love',
			'[CS 76] This Is My Beloved Son',
			'[CS 77] The Church of Jesus Christ',
			'[CS 78–79] I’m Trying to Be like Jesus',
			'[CS 80–81] Had I Been a Child',
			'[CS 82–83] When He Comes Again',
			'[CS 86] An Angel Came to Joseph Smith',
			'[CS 86] The Golden Plates',
			'[CS 87] The Sacred Grove',
			'[CS 88] On a Golden Springtime',
			'[CS 89] The Priesthood Is Restored',
			'[CS 90–91] Truth from Elijah',
			'[CS 92–93] The Hearts of the Children',
			'[CS 94] Family History—I Am Doing It',
			'[CS 95] I Love to See the Temple',
			'[CS 96–97] Faith',
			'[CS 97] God’s Love',
			'[CS 98] Repentance',
			'[CS 99] Help Me, Dear Father',
			'[CS 100–101] Baptism',
			'[CS 102] When Jesus Christ Was Baptized',
			'[CS 103] When I Am Baptized',
			'[CS 104] I Like My Birthdays',
			'[CS 105] The Holy Ghost',
			'[CS 106–7] The Still Small Voice',
			'[CS 107] Listen, Listen',
			'[CS 108] Seek the Lord Early',
			'[CS 109] Search, Ponder, and Pray',
			'[CS 110–11] Follow the Prophet',
			'[CS 112–13] The Commandments',
			'[CS 114–15] The Books in the Old Testament',
			'[CS 116–17] The Books in the New Testament',
			'[CS 118–19] Book of Mormon Stories',
			'[CS 119] The Books in the Book of Mormon',
			'[CS 120–21] Nephi’s Courage',
			'[CS 122] The First Article of Faith',
			'[CS 122] The Second Article of Faith',
			'[CS 123] The Third Article of Faith',
			'[CS 124] The Fourth Article of Faith',
			'[CS 125] The Fifth Article of Faith',
			'[CS 126] The Sixth Article of Faith',
			'[CS 126] The Seventh Article of Faith',
			'[CS 127] The Eighth Article of Faith',
			'[CS 128] The Ninth Article of Faith',
			'[CS 128–29] The Tenth Article of Faith',
			'[CS 130] The Eleventh Article of Faith',
			'[CS 131] The Twelfth Article of Faith',
			'[CS 132–33] The Thirteenth Article of Faith',
			'[CS 134] Latter-day Prophets',
			'[CS 135] Our Bishop',
			'[CS 136] Love One Another',
			'[CS 138–39] Where Love Is',
			'[CS 140–41] I’ll Walk with You',
			'[CS 142–43] Every Star Is Different',
			'[CS 144] Shine On',
			'[CS 145] A Special Gift Is Kindness',
			'[CS 145] Kindness Begins with Me',
			'[CS 146–47] Keep the Commandments',
			'[CS 148] I Want to Live the Gospel',
			'[CS 149] I Believe in Being Honest',
			'[CS 150] I’m Glad to Pay a Tithing',
			'[CS 150] I Want to Give the Lord My Tenth',
			'[CS 151] I Am Glad for Many Things',
			'[CS 152] Hum Your Favorite Hymn',
			'[CS 153] The Lord Gave Me a Temple',
			'[CS 154–55] The Word of Wisdom',
			'[CS 155] Remember the Sabbath Day',
			'[CS 156] The Chapel Doors',
			'[CS 157] When I Go to Church',
			'[CS 158] Dare to Do Right',
			'[CS 159] Stand for the Right',
			'[CS 160–61] Choose the Right Way',
			'[CS 161] I Pledge Myself to Love the Right',
			'[CS 162] I Will Be Valiant',
			'[CS 163] I Am like a Star',
			'[CS 164–65] I Will Follow God’s Plan',
			'[CS 166–67] A Young Man Prepared',
			'[CS 167] Go the Second Mile',
			'[CS 168] I Want to Be a Missionary Now',
			'[CS 169] I Hope They Call Me on a Mission',
			'[CS 170–71] The Things I Do',
			'[CS 172–73] We’ll Bring the World His Truth: Army of Helaman',
			'[CS 174–75] Called to Serve',
			'[CS 176] Tell Me, Dear Lord',
			'[CS 177] Teach Me to Walk in the Light',
			'[CS 178–79] Teacher, Do You Love Me?',
			'[CS 180–81] How Dear to God Are Little Children',
			'[CS 182–85] How Will They Know?',
			'[CS 188] Families Can Be Together Forever',
			'[CS 189] Family Prayer',
			'[CS 190–91] Love Is Spoken Here',
			'[CS 192] Home',
			'[CS 193] Sing Your Way Home',
			'[CS 194] The Family',
			'[CS 195] Family Night',
			'[CS 196] Saturday',
			'[CS 197] A Happy Helper',
			'[CS 197] Quickly I’ll Obey',
			'[CS 198] A Happy Family',
			'[CS 198] When We’re Helping',
			'[CS 199] I Have a Family Tree',
			'[CS 200] Grandmother',
			'[CS 202] I Often Go Walking',
			'[CS 203] My Mother Dear',
			'[CS 204–5] Mother, Tell Me the Story',
			'[CS 206] Mother Dear',
			'[CS 206] Dearest Mother, I Love You',
			'[CS 207] Mother, I Love You',
			'[CS 208] The Dearest Names',
			'[CS 209] Fathers',
			'[CS 210] Daddy’s Homecoming',
			'[CS 211] My Dad',
			'[CS 214] Pioneer Children Sang As They Walked',
			'[CS 215] Pioneer Children Were Quick to Obey',
			'[CS 216–17] Little Pioneer Children',
			'[CS 217] Westward Ho!',
			'[CS 218–19] To Be a Pioneer',
			'[CS 219] The Oxcart',
			'[CS 220] The Handcart Song',
			'[CS 221] Covered Wagons',
			'[CS 222–23] Whenever I Think about Pioneers',
			'[CS 224] My Country',
			'[CS 225] My Flag, My Flag',
			'[CS 228–29] My Heavenly Father Loves Me',
			'[CS 230] I Think the World Is Glorious',
			'[CS 231] All Things Bright and Beautiful',
			'[CS 232–33] Beauty Everywhere',
			'[CS 233] The World Is So Lovely',
			'[CS 234] Because God Loves Me',
			'[CS 235] The World Is So Big',
			'[CS 236] “Give,” Said the Little Stream',
			'[CS 237] The Prophet Said to Plant a Garden',
			'[CS 239] Because It’s Spring',
			'[CS 240] In the Leafy Treetops',
			'[CS 241] Birds in the Tree',
			'[CS 241] Rain Is Falling All Around',
			'[CS 242–43] Popcorn Popping',
			'[CS 243] Little Seeds Lie Fast Asleep',
			'[CS 244] Little Purple Pansies',
			'[CS 245] Oh, What Do You Do in the Summertime?',
			'[CS 246] It’s Autumntime',
			'[CS 247] Autumn Day',
			'[CS 248] Falling Snow',
			'[CS 249] Once There Was a Snowman',
			'[CS 252] Lift Up Your Voice and Sing',
			'[CS 253] Sing a Song',
			'[CS 253] Fun to Do',
			'[CS 254] Hello, Friends!',
			'[CS 254] Our Door Is Always Open',
			'[CS 255] Come with Me to Primary',
			'[CS 256–57] We Welcome You',
			'[CS 258] Our Primary Colors',
			'[CS 259] We’re All Together Again',
			'[CS 260] Hello Song',
			'[CS 261] Here We Are Together',
			'[CS 262] Friends Are Fun',
			'[CS 263] We Are Different',
			'[CS 264] Happy Song',
			'[CS 266] If You’re Happy',
			'[CS 267] Smiles',
			'[CS 267] A Smile Is like the Sunshine',
			'[CS 268] Two Little Eyes',
			'[CS 269] I Have Two Ears',
			'[CS 270] Two Happy Feet',
			'[CS 271] I Wiggle',
			'[CS 272] I Have Two Little Hands',
			'[CS 273] My Hands',
			'[CS 274] Roll Your Hands',
			'[CS 275] Head, Shoulders, Knees, and Toes',
			'[CS 275] To Get Quiet',
			'[CS 276] Do As I’m Doing',
			'[CS 277] Hinges',
			'[CS 278] Stand Up',
			'[CS 279] Oh, How We Love to Stand',
			'[CS 280] Healthy, Wealthy, and Wise',
			'[CS 281] The Wise Man and the Foolish Man',
			'[CS 282] Feliz Cumpleaños',
			'[CS 283] Your Happy Birthday',
			'[CS 284] Happy, Happy Birthday',
			'[CS 284–85] Have a Very Happy Birthday!',
			'[CS 285] You’ve Had a Birthday',
			'[Hymns 1] The Morning Breaks',
			'[Hymns 2] The Spirit of God',
			'[Hymns 3] Now Let Us Rejoice',
			'[Hymns 4] Truth Eternal',
			'[Hymns 5] High on the Mountain Top',
			'[Hymns 6] Redeemer of Israel',
			'[Hymns 7] Israel, Israel, God Is Calling',
			'[Hymns 8] Awake and Arise',
			'[Hymns 9] Come, Rejoice',
			'[Hymns 10] Come, Sing to the Lord',
			'[Hymns 11] What Was Witnessed in the Heavens?',
			'[Hymns 12] ’Twas Witnessed in the Morning Sky',
			'[Hymns 13] An Angel from on High',
			'[Hymns 14] Sweet Is the Peace the Gospel Brings',
			'[Hymns 15] I Saw a Mighty Angel Fly',
			'[Hymns 16] What Glorious Scenes Mine Eyes Behold',
			'[Hymns 17] Awake, Ye Saints of God, Awake!',
			'[Hymns 18] The Voice of God Again Is Heard',
			'[Hymns 19] We Thank Thee, O God, for a Prophet',
			'[Hymns 20] God of Power, God of Right',
			'[Hymns 21] Come, Listen to a Prophet’s Voice',
			'[Hymns 22] We Listen to a Prophet’s Voice',
			'[Hymns 23] We Ever Pray for Thee',
			'[Hymns 24] God Bless Our Prophet Dear',
			'[Hymns 25] Now We’ll Sing with One Accord',
			'[Hymns 26] Joseph Smith’s First Prayer',
			'[Hymns 27] Praise to the Man',
			'[Hymns 28] Saints, Behold How Great Jehovah',
			'[Hymns 29] A Poor Wayfaring Man of Grief',
			'[Hymns 30] Come, Come, Ye Saints',
			'[Hymns 31] O God, Our Help in Ages Past',
			'[Hymns 32] The Happy Day at Last Has Come',
			'[Hymns 33] Our Mountain Home So Dear',
			'[Hymns 34] O Ye Mountains High',
			'[Hymns 35] For the Strength of the Hills',
			'[Hymns 36] They, the Builders of the Nation',
			'[Hymns 37] The Wintry Day, Descending to Its Close',
			'[Hymns 38] Come, All Ye Saints of Zion',
			'[Hymns 39] O Saints of Zion',
			'[Hymns 40] Arise, O Glorious Zion',
			'[Hymns 41] Let Zion in Her Beauty Rise',
			'[Hymns 42] Hail to the Brightness of Zion’s Glad Morning!',
			'[Hymns 43] Zion Stands with Hills Surrounded',
			'[Hymns 44] Beautiful Zion, Built Above',
			'[Hymns 45] Lead Me into Life Eternal',
			'[Hymns 46] Glorious Things of Thee Are Spoken',
			'[Hymns 47] We Will Sing of Zion',
			'[Hymns 48] Glorious Things Are Sung of Zion',
			'[Hymns 49] Adam-ondi-Ahman',
			'[Hymns 50] Come, Thou Glorious Day of Promise',
			'[Hymns 51] Sons of Michael, He Approaches',
			'[Hymns 52] The Day Dawn Is Breaking',
			'[Hymns 53] Let Earth’s Inhabitants Rejoice',
			'[Hymns 54] Behold, the Mountain of the Lord',
			'[Hymns 55] Lo, the Mighty God Appearing!',
			'[Hymns 56] Softly Beams the Sacred Dawning',
			'[Hymns 57] We’re Not Ashamed to Own Our Lord',
			'[Hymns 58] Come, Ye Children of the Lord',
			'[Hymns 59] Come, O Thou King of Kings',
			'[Hymns 60] Battle Hymn of the Republic',
			'[Hymns 61] Raise Your Voices to the Lord',
			'[Hymns 62] All Creatures of Our God and King',
			'[Hymns 63] Great King of Heaven',
			'[Hymns 64] On This Day of Joy and Gladness',
			'[Hymns 65] Come, All Ye Saints Who Dwell on Earth',
			'[Hymns 66] Rejoice, the Lord Is King!',
			'[Hymns 67] Glory to God on High',
			'[Hymns 68] A Mighty Fortress Is Our God',
			'[Hymns 69] All Glory, Laud, and Honor',
			'[Hymns 70] Sing Praise to Him',
			'[Hymns 71] With Songs of Praise',
			'[Hymns 72] Praise to the Lord, the Almighty',
			'[Hymns 73] Praise the Lord with Heart and Voice',
			'[Hymns 74] Praise Ye the Lord',
			'[Hymns 75] In Hymns of Praise',
			'[Hymns 76] God of Our Fathers, We Come unto Thee',
			'[Hymns 77] Great Is the Lord',
			'[Hymns 78] God of Our Fathers, Whose Almighty Hand',
			'[Hymns 79] With All the Power of Heart and Tongue',
			'[Hymns 80] God of Our Fathers, Known of Old',
			'[Hymns 81] Press Forward, Saints',
			'[Hymns 82] For All the Saints',
			'[Hymns 83] Guide Us, O Thou Great Jehovah',
			'[Hymns 84] Faith of Our Fathers',
			'[Hymns 85] How Firm a Foundation',
			'[Hymns 86] How Great Thou Art',
			'[Hymns 87] God Is Love',
			'[Hymns 88] Great God, Attend While Zion Sings',
			'[Hymns 89] The Lord Is My Light',
			'[Hymns 90] From All That Dwell below the Skies',
			'[Hymns 91] Father, Thy Children to Thee Now Raise',
			'[Hymns 92] For the Beauty of the Earth',
			'[Hymns 93] Prayer of Thanksgiving',
			'[Hymns 94] Come, Ye Thankful People',
			'[Hymns 95] Now Thank We All Our God',
			'[Hymns 96] Dearest Children, God Is Near You',
			'[Hymns 97] Lead, Kindly Light',
			'[Hymns 98] I Need Thee Every Hour',
			'[Hymns 99] Nearer, Dear Savior, to Thee',
			'[Hymns 100] Nearer, My God, to Thee',
			'[Hymns 101] Guide Me to Thee',
			'[Hymns 102] Jesus, Lover of My Soul',
			'[Hymns 103] Precious Savior, Dear Redeemer',
			'[Hymns 104] Jesus, Savior, Pilot Me',
			'[Hymns 105] Master, the Tempest Is Raging',
			'[Hymns 106] God Speed the Right',
			'[Hymns 107] Lord, Accept Our True Devotion',
			'[Hymns 108] The Lord Is My Shepherd',
			'[Hymns 109] The Lord My Pasture Will Prepare',
			'[Hymns 110] Cast Thy Burden upon the Lord',
			'[Hymns 111] Rock of Ages',
			'[Hymns 112] Savior, Redeemer of My Soul',
			'[Hymns 113] Our Savior’s Love',
			'[Hymns 114] Come unto Him',
			'[Hymns 115] Come, Ye Disconsolate',
			'[Hymns 116] Come, Follow Me',
			'[Hymns 117] Come unto Jesus',
			'[Hymns 118] Ye Simple Souls Who Stray',
			'[Hymns 119] Come, We That Love the Lord',
			'[Hymns 120] Lean on My Ample Arm',
			'[Hymns 121] I’m a Pilgrim, I’m a Stranger',
			'[Hymns 122] Though Deepening Trials',
			'[Hymns 123] Oh, May My Soul Commune with Thee',
			'[Hymns 124] Be Still, My Soul',
			'[Hymns 125] How Gentle God’s Commands',
			'[Hymns 126] How Long, O Lord Most Holy and True',
			'[Hymns 127] Does the Journey Seem Long?',
			'[Hymns 128] When Faith Endures',
			'[Hymns 129] Where Can I Turn for Peace?',
			'[Hymns 130] Be Thou Humble',
			'[Hymns 131] More Holiness Give Me',
			'[Hymns 132] God Is in His Holy Temple',
			'[Hymns 133] Father in Heaven',
			'[Hymns 134] I Believe in Christ',
			'[Hymns 135] My Redeemer Lives',
			'[Hymns 136] I Know That My Redeemer Lives',
			'[Hymns 137] Testimony',
			'[Hymns 138] Bless Our Fast, We Pray',
			'[Hymns 139] In Fasting We Approach Thee',
			'[Hymns 140] Did You Think to Pray?',
			'[Hymns 141] Jesus, the Very Thought of Thee',
			'[Hymns 142] Sweet Hour of Prayer',
			'[Hymns 143] Let the Holy Spirit Guide',
			'[Hymns 144] Secret Prayer',
			'[Hymns 145] Prayer Is the Soul’s Sincere Desire',
			'[Hymns 146] Gently Raise the Sacred Strain',
			'[Hymns 147] Sweet Is the Work',
			'[Hymns 148] Sabbath Day',
			'[Hymns 149] As the Dew from Heaven Distilling',
			'[Hymns 150] O Thou Kind and Gracious Father',
			'[Hymns 151] We Meet, Dear Lord',
			'[Hymns 152] God Be with You Till We Meet Again',
			'[Hymns 153] Lord, We Ask Thee Ere We Part',
			'[Hymns 154] Father, This Hour Has Been One of Joy',
			'[Hymns 155] We Have Partaken of Thy Love',
			'[Hymns 156] Sing We Now at Parting',
			'[Hymns 157] Thy Spirit, Lord, Has Stirred Our Souls',
			'[Hymns 158] Before Thee, Lord, I Bow My Head',
			'[Hymns 159] Now the Day Is Over',
			'[Hymns 160] Softly Now the Light of Day',
			'[Hymns 161] The Lord Be with Us',
			'[Hymns 162] Lord, We Come before Thee Now',
			'[Hymns 163] Lord, Dismiss Us with Thy Blessing',
			'[Hymns 164] Great God, to Thee My Evening Song',
			'[Hymns 165] Abide with Me; ’Tis Eventide',
			'[Hymns 166] Abide with Me!',
			'[Hymns 167] Come, Let Us Sing an Evening Hymn',
			'[Hymns 168] As the Shadows Fall',
			'[Hymns 169] As Now We Take the Sacrament',
			'[Hymns 170] God, Our Father, Hear Us Pray',
			'[Hymns 171] With Humble Heart',
			'[Hymns 172] In Humility, Our Savior',
			'[Hymns 173] While of These Emblems We Partake',
			'[Hymns 174] While of These Emblems We Partake',
			'[Hymns 175] O God, the Eternal Father',
			'[Hymns 176] ’Tis Sweet to Sing the Matchless Love',
			'[Hymns 177] ’Tis Sweet To Sing the Matchless Love',
			'[Hymns 178] O Lord of Hosts',
			'[Hymns 179] Again, Our Dear Redeeming Lord',
			'[Hymns 180] Father in Heaven, We Do Believe',
			'[Hymns 181] Jesus of Nazareth, Savior and King',
			'[Hymns 182] We’ll Sing All Hail to Jesus’ Name',
			'[Hymns 183] In Remembrance of Thy Suffering',
			'[Hymns 184] Upon the Cross of Calvary',
			'[Hymns 185] Reverently and Meekly Now',
			'[Hymns 186] Again We Meet around the Board',
			'[Hymns 187] God Loved Us, So He Sent His Son',
			'[Hymns 188] Thy Will, O Lord, Be Done',
			'[Hymns 189] O Thou, Before the World Began',
			'[Hymns 190] In Memory of the Crucified',
			'[Hymns 191] Behold the Great Redeemer Die',
			'[Hymns 192] He Died! The Great Redeemer Died',
			'[Hymns 193] I Stand All Amazed',
			'[Hymns 194] There Is a Green Hill Far Away',
			'[Hymns 195] How Great the Wisdom and the Love',
			'[Hymns 196] Jesus, Once of Humble Birth',
			'[Hymns 197] O Savior, Thou Who Wearest a Crown',
			'[Hymns 198] That Easter Morn',
			'[Hymns 199] He Is Risen!',
			'[Hymns 200] Christ the Lord Is Risen Today',
			'[Hymns 201] Joy to the World',
			'[Hymns 202] Oh, Come, All Ye Faithful',
			'[Hymns 203] Angels We Have Heard on High',
			'[Hymns 204] Silent Night',
			'[Hymns 205] Once in Royal David’s City',
			'[Hymns 206] Away in a Manger',
			'[Hymns 207] It Came upon the Midnight Clear',
			'[Hymns 208] O Little Town of Bethlehem',
			'[Hymns 209] Hark! The Herald Angels Sing',
			'[Hymns 210] With Wondering Awe',
			'[Hymns 211] While Shepherds Watched Their Flocks',
			'[Hymns 212] Far, Far Away on Judea’s Plains',
			'[Hymns 213] The First Noel',
			'[Hymns 214] I Heard the Bells on Christmas Day',
			'[Hymns 215] Ring Out, Wild Bells',
			'[Hymns 216] We Are Sowing',
			'[Hymns 217] Come, Let Us Anew',
			'[Hymns 218] We Give Thee But Thine Own',
			'[Hymns 219] Because I Have Been Given Much',
			'[Hymns 220] Lord, I Would Follow Thee',
			'[Hymns 221] Dear to the Heart of the Shepherd',
			'[Hymns 222] Hear Thou Our Hymn, O Lord',
			'[Hymns 223] Have I Done Any Good?',
			'[Hymns 224] I Have Work Enough to Do',
			'[Hymns 225] We Are Marching On to Glory',
			'[Hymns 226] Improve the Shining Moments',
			'[Hymns 227] There Is Sunshine in My Soul Today',
			'[Hymns 228] You Can Make the Pathway Bright',
			'[Hymns 229] Today, While the Sun Shines',
			'[Hymns 230] Scatter Sunshine',
			'[Hymns 231] Father, Cheer Our Souls Tonight',
			'[Hymns 232] Let Us Oft Speak Kind Words',
			'[Hymns 233] Nay, Speak No Ill',
			'[Hymns 234] Jesus, Mighty King in Zion',
			'[Hymns 235] Should You Feel Inclined to Censure',
			'[Hymns 236] Lord, Accept into Thy Kingdom',
			'[Hymns 237] Do What Is Right',
			'[Hymns 238] Behold Thy Sons and Daughters, Lord',
			'[Hymns 239] Choose the Right',
			'[Hymns 240] Know This, That Every Soul Is Free',
			'[Hymns 241] Count Your Blessings',
			'[Hymns 242] Praise God, from Whom All Blessings Flow',
			'[Hymns 243] Let Us All Press On',
			'[Hymns 244] Come Along, Come Along',
			'[Hymns 245] This House We Dedicate to Thee',
			'[Hymns 246] Onward, Christian Soldiers',
			'[Hymns 247] We Love Thy House, O God',
			'[Hymns 248] Up, Awake, Ye Defenders of Zion',
			'[Hymns 249] Called to Serve',
			'[Hymns 250] We Are All Enlisted',
			'[Hymns 251] Behold! A Royal Army',
			'[Hymns 252] Put Your Shoulder to the Wheel',
			'[Hymns 253] Like Ten Thousand Legions Marching',
			'[Hymns 254] True to the Faith',
			'[Hymns 255] Carry On',
			'[Hymns 256] As Zion’s Youth in Latter Days',
			'[Hymns 257] Rejoice! A Glorious Sound Is Heard',
			'[Hymns 258] O Thou Rock of Our Salvation',
			'[Hymns 259] Hope of Israel',
			'[Hymns 260] Who’s on the Lord’s Side?',
			'[Hymns 261] Thy Servants Are Prepared',
			'[Hymns 262] Go, Ye Messengers of Glory',
			'[Hymns 263] Go Forth with Faith',
			'[Hymns 264] Hark, All Ye Nations!',
			'[Hymns 265] Arise, O God, and Shine',
			'[Hymns 266] The Time Is Far Spent',
			'[Hymns 267] How Wondrous and Great',
			'[Hymns 268] Come, All Whose Souls Are Lighted',
			'[Hymns 269] Jehovah, Lord of Heaven and Earth',
			'[Hymns 270] I’ll Go Where You Want Me to Go',
			'[Hymns 271] Oh, Holy Words of Truth and Love',
			'[Hymns 272] Oh Say, What Is Truth?',
			'[Hymns 273] Truth Reflects upon Our Senses',
			'[Hymns 274] The Iron Rod',
			'[Hymns 275] Men Are That They Might Have Joy',
			'[Hymns 276] Come Away to the Sunday School',
			'[Hymns 277] As I Search the Holy Scriptures',
			'[Hymns 278] Thanks for the Sabbath School',
			'[Hymns 279] Thy Holy Word',
			'[Hymns 280] Welcome, Welcome, Sabbath Morning',
			'[Hymns 281] Help Me Teach with Inspiration',
			'[Hymns 282] We Meet Again in Sabbath School',
			'[Hymns 283] The Glorious Gospel Light Has Shone',
			'[Hymns 284] If You Could Hie to Kolob',
			'[Hymns 285] God Moves in a Mysterious Way',
			'[Hymns 286] Oh, What Songs of the Heart',
			'[Hymns 287] Rise, Ye Saints, and Temples Enter',
			'[Hymns 288] How Beautiful Thy Temples, Lord',
			'[Hymns 289] Holy Temples on Mount Zion',
			'[Hymns 290] Rejoice, Ye Saints of Latter Days',
			'[Hymns 291] Turn Your Hearts',
			'[Hymns 292] O My Father',
			'[Hymns 293] Each Life That Touches Ours for Good',
			'[Hymns 294] Love at Home',
			'[Hymns 295] O Love That Glorifies the Son',
			'[Hymns 296] Our Father, by Whose Name',
			'[Hymns 297] From Homes of Saints Glad Songs Arise',
			'[Hymns 298] Home Can Be a Heaven on Earth',
			'[Hymns 299] Children of Our Heavenly Father',
			'[Hymns 300] Families Can Be Together Forever',
			'[Hymns 301] I Am a Child of God',
			'[Hymns 302] I Know My Father Lives',
			'[Hymns 303] Keep the Commandments',
			'[Hymns 304] Teach Me to Walk in the Light',
			'[Hymns 305] The Light Divine',
			'[Hymns 306] God’s Daily Care',
			'[Hymns 307] In Our Lovely Deseret',
			'[Hymns 308] Love One Another',
			'[Hymns 309] As Sisters in Zion: (Women)',
			'[Hymns 310] A Key Was Turned in Latter Days: (Women)',
			'[Hymns 311] We Meet Again as Sisters: (Women)',
			'[Hymns 312] We Ever Pray for Thee: (Women)',
			'[Hymns 313] God Is Love: (Women)',
			'[Hymns 314] How Gentle God’s Commands: (Women)',
			'[Hymns 315] Jesus, the Very Thought of Thee: (Women)',
			'[Hymns 316] The Lord Is My Shepherd: (Women)',
			'[Hymns 317] Sweet Is the Work: (Women)',
			'[Hymns 318] Love at Home: (Women)',
			'[Hymns 319] Ye Elders of Israel: (Men)',
			'[Hymns 320] The Priesthood of Our Lord: (Men)',
			'[Hymns 321] Ye Who Are Called to Labor: (Men)',
			'[Hymns 322] Come, All Ye Sons of God: (Men)',
			'[Hymns 323] Rise Up, O Men of God: (Men’s Choir)',
			'[Hymns 324] Rise Up, O Men of God: (Men)',
			'[Hymns 325] See the Mighty Priesthood Gathered: (Men’s Choir)',
			'[Hymns 326] Come, Come, Ye Saints: (Men’s Choir)',
			'[Hymns 327] Go, Ye Messengers of Heaven: (Men’s Choir)',
			'[Hymns 328] An Angel from on High: (Men’s Choir)',
			'[Hymns 329] Thy Servants Are Prepared: (Men’s Choir)',
			'[Hymns 330] See, the Mighty Angel Flying: (Men’s Choir)',
			'[Hymns 331] Oh Say, What Is Truth?: (Men’s Choir)',
			'[Hymns 332] Come, O Thou King of Kings: (Men’s Choir)',
			'[Hymns 333] High on the Mountain Top: (Men’s Choir)',
			'[Hymns 334] I Need Thee Every Hour: (Men’s Choir)',
			'[Hymns 335] Brightly Beams Our Father’s Mercy: (Men’s Choir)',
			'[Hymns 336] School Thy Feelings: (Men’s Choir)',
			'[Hymns 337] O Home Beloved: (Men’s Choir)',
			'[Hymns 338] America the Beautiful',
			'[Hymns 339] My Country, ’Tis of Thee',
			'[Hymns 340] The Star-Spangled Banner',
			'[Hymns 341] God Save the King'
		];
		$( ".auto-complete" ).autocomplete({
			source: songs
		});
		$( "#Date" ).datepicker();
	});
</script>
	</body>
</html>
