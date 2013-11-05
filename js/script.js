$(function() {
	var songs = [
		{
			title: 'If The Savior Stood Beside Me'
		},
		{
			title: 'Scripture Power',
			first_line: "Because I want to be like the Savior, and I can"
		},
		{
			title: 'As a Child of God',
			first_line: "I came to earth with power to choose"
		},
		{
			title: 'My Eternal Family',
			first_line: "I am a builder working each day"
		},
		{
			title: 'The Family Is of God',
			first_line: "Our Father has a family"
		},
		{
			pages: 'CS 2–3',
			title: 'I Am a Child of God'
		},
		{
			pages: 'CS 4',
			title: 'I Lived in Heaven'
		},
		{
			pages: 'CS 5',
			title: 'I Know My Father Lives'
		},
		{
			pages: 'CS 6',
			title: 'Thanks to Thee',
			first_line: "When I'm home or far away"
		},
		{
			pages: 'CS 7',
			title: 'I Thank Thee, Dear Father'
		},
		{
			pages: 'CS 8',
			title: 'Father, We Thank Thee for the Night'
		},
		{
			pages: 'CS 9',
			title: 'Can a Little Child like Me?'
		},
		{
			pages: 'CS 10',
			title: 'Thank Thee for Everything',
			first_line: 'Father, please hear us sing'
		},
		{
			pages: 'CS 11',
			title: "I'm Thankful to Be Me",
			first_line: "At night, when I'm alone in bed"
		},
		{
			pages: 'CS 12–13',
			title: "A Child's Prayer",
			first_line: 'Heavenly Father, are you really there?'
		},
		{
			pages: 'CS 14',
			title: 'I Pray in Faith',
			first_line: "I kneel to pray ev'ry day"
		},
		{
			pages: 'CS 15',
			title: 'If with All Your Hearts'
		},
		{
			pages: 'CS 16–17',
			title: 'Children All Over the World',
			first_line: 'All over the world at the end of day'
		},
		{
			pages: 'CS 18',
			title: 'I Need My Heavenly Father'
		},
		{
			pages: 'CS 19',
			title: 'Heavenly Father, Now I Pray'
		},
		{
			pages: 'CS 20',
			title: 'A Song of Thanks',
			first_line: "Thank thee for the world so sweet"
		},
		{
			pages: 'CS 20',
			title: 'Thanks to Our Father'
		},
		{
			pages: 'CS 21',
			title: 'For Health and Strength'
		},
		{
			pages: 'CS 21',
			title: 'For Thy Bounteous Blessings'
		},
		{
			pages: 'CS 22',
			title: 'A Prayer Song',
			first_line: "We bow our heads in prayer today"
		},
		{
			pages: 'CS 22',
			title: 'A Prayer',
			first_line: 'Father in Heaven, on this lovely day'
		},
		{
			pages: 'CS 23',
			title: 'Father Up Above',
			first_line: "O Father, look on us today"
		},
		{
			pages: 'CS 23',
			title: 'Heavenly Father, While I Pray'
		},
		{
			pages: 'CS 24',
			title: 'Thank Thee, Father'
		},
		{
			pages: 'CS 25',
			title: 'We Bow Our Heads'
		},
		{
			pages: 'CS 25',
			title: 'I Love to Pray',
			first_line: 'In the morning when I wake'
		},
		{
			pages: 'CS 26',
			title: 'Reverently, Quietly'
		},
		{
			pages: 'CS 27',
			title: 'Reverence',
			first_line: "Today, dear Father, I will show"
		},
		{
			pages: 'CS 27',
			title: 'We Are Reverent'
		},
		{
			pages: 'CS 28',
			title: 'I Want to Be Reverent'
		},
		{
			pages: 'CS 28',
			title: 'I Will Try to Be Reverent',
			first_line: 'I Want to Be Reverent'
		},
		{
			pages: 'CS 29',
			title: 'Father, I Will Reverent Be'
		},
		{
			pages: 'CS 30',
			title: "This Is God's House"
		},
		{
			pages: 'CS 30',
			title: 'Our Chapel Is a Sacred Place'
		},
		{
			pages: 'CS 31',
			title: 'Reverence Is Love',
			first_line: "Rev'rence is more than just quietly sitting"
		},
		{
			pages: 'CS 34–35',
			title: 'He Sent His Son',
			first_line: 'How could the Father tell the world of love and tenderness?'
		},
		{
			pages: 'CS 36',
			title: 'Samuel Tells of the Baby Jesus',
			first_line: 'Said Samuel, "Within five years'
		},
		{
			pages: 'CS 37',
			title: 'Stars Were Gleaming'
		},
		{
			pages: 'CS 38–39',
			title: 'When Joseph Went to Bethlehem'
		},
		{
			pages: 'CS 39',
			title: 'Little Jesus'
		},
		{
			pages: 'CS 40',
			title: 'There Was Starlight on the Hillside'
		},
		{
			pages: 'CS 40',
			title: "The Shepherd's Carol"
		},
		{
			pages: 'CS 41',
			title: 'Once within a Lowly Stable'
		},
		{
			pages: 'CS 42–43',
			title: 'Away in a Manger'
		},
		{
			pages: 'CS 44–45',
			title: "Mary's Lullaby",
			first_line: 'Lullaby, lullaby, my little one'
		},
		{
			pages: 'CS 46',
			title: 'Who Is the Child?'
		},
		{
			pages: 'CS 47',
			title: 'Sleep, Little Jesus'
		},
		{
			pages: 'CS 48–49',
			title: 'Oh, Hush Thee, My Baby'
		},
		{
			pages: 'CS 50–51',
			title: 'Picture a Christmas',
			first_line: "Picture a stable in Judea"
		},
		{
			pages: 'CS 51',
			title: 'Have a Very Merry Christmas!'
		},
		{
			pages: 'CS 52–53',
			title: 'The Nativity Song',
			first_line: "This is the season beloved of the year"
		},
		{
			pages: 'CS 54',
			title: 'Christmas Bells'
		},
		{
			pages: 'CS 55',
			title: 'Jesus Once Was a Little Child'
		},
		{
			pages: 'CS 56',
			title: 'I Think When I Read That Sweet Story'
		},
		{
			pages: 'CS 57',
			title: 'Tell Me the Stories of Jesus'
		},
		{
			pages: 'CS 58',
			title: 'Little Lambs So White and Fair'
		},
		{
			pages: 'CS 58',
			title: 'Jesus Is Our Loving Friend'
		},
		{
			pages: 'CS 59',
			title: 'Jesus Loved the Little Children'
		},
		{
			pages: 'CS 60–61',
			title: 'Jesus Wants Me for a Sunbeam'
		},
		{
			pages: 'CS 61',
			title: 'Jesus Said Love Everyone'
		},
		{
			pages: 'CS 62–63',
			title: 'Beautiful Savior',
			first_line: 'Fair is the sunshine'
		},
		{
			pages: 'CS 64',
			title: 'Did Jesus Really Live Again?'
		},
		{
			pages: 'CS 65',
			title: 'He Died That We Might Live Again'
		},
		{
			pages: 'CS 66–67',
			title: 'Hosanna'
		},
		{
			pages: 'CS 68–69',
			title: 'Easter Hosanna',
			first_line: "The prophecies of long ago were now at last fulfilled"
		},
		{
			pages: 'CS 70',
			title: 'Jesus Has Risen'
		},
		{
			pages: 'CS 71',
			title: 'To Think about Jesus',
			first_line: "It shouldn't be hard to sit very still"
		},
		{
			pages: 'CS 72',
			title: 'The Sacrament',
			first_line: 'As I take the water and bread'
		},
		{
			pages: 'CS 73',
			title: 'Before I Take the Sacrament'
		},
		{
			pages: 'CS 73',
			title: 'Help Us, O God, to Understand'
		},
		{
			pages: 'CS 74–75',
			title: "I Feel My Savior's Love"
		},
		{
			pages: 'CS 76',
			title: 'This Is My Beloved Son',
			first_line: "Jesus entered Jordan's waters"
		},
		{
			pages: 'CS 77',
			title: 'The Church of Jesus Christ',
			first_line: 'I belong to The Church of Jesus Christ of Latter-day Saints'
		},
		{
			pages: 'CS 78–79',
			title: "I'm Trying to Be like Jesus"
		},
		{
			pages: 'CS 80–81',
			title: 'Had I Been a Child'
		},
		{
			pages: 'CS 82–83',
			title: 'When He Comes Again',
			first_line: 'I wonder, when he comes again'
		},
		{
			pages: 'CS 86',
			title: 'An Angel Came to Joseph Smith'
		},
		{
			pages: 'CS 86',
			title: 'The Golden Plates',
			first_line: "The Golden Plates lay hidden"
		},
		{
			pages: 'CS 87',
			title: 'The Sacred Grove'
		},
		{
			pages: 'CS 88',
			title: 'On a Golden Springtime'
		},
		{
			pages: 'CS 89',
			title: 'The Priesthood Is Restored'
		},
		{
			pages: 'CS 90–91',
			title: 'Truth from Elijah',
			first_line: 'The hearts of the children have turned to their fathers'
		},
		{
			pages: 'CS 92–93',
			title: 'The Hearts of the Children'
		},
		{
			pages: 'CS 94',
			title: 'Family History—I Am Doing It'
		},
		{
			pages: 'CS 95',
			title: 'I Love to See the Temple'
		},
		{
			pages: 'CS 96–97',
			title: 'Faith'
		},
		{
			pages: 'CS 97',
			title: "God's Love",
			first_line: "We do not see the wind"
		},
		{
			pages: 'CS 98',
			title: 'Repentance'
		},
		{
			pages: 'CS 99',
			title: 'Help Me, Dear Father'
		},
		{
			pages: 'CS 100–101',
			title: 'Baptism',
			first_line: 'Jesus came to John the Baptist'
		},
		{
			pages: 'CS 102',
			title: 'When Jesus Christ Was Baptized'
		},
		{
			pages: 'CS 103',
			title: 'When I Am Baptized',
			first_line: 'I like to look for rainbows whenever there is rain'
		},
		{
			pages: 'CS 104',
			title: 'I Like My Birthdays'
		},
		{
			pages: 'CS 105',
			title: 'The Holy Ghost',
			first_line: "When Christ was on the earth"
		},
		{
			pages: 'CS 106–7',
			title: 'The Still Small Voice',
			first_line: 'Through a still small voice, the Spirit speaks to me'
		},
		{
			pages: 'CS 107',
			title: 'Listen, Listen',
			first_line: 'Listen to the still small voice'
		},
		{
			pages: 'CS 108',
			title: 'Seek the Lord Early',
			first_line: "I'll seek the Lord early while in my youth"
		},
		{
			pages: 'CS 109',
			title: 'Search, Ponder, and Pray',
			first_line: 'I love to read the holy scriptures'
		},
		{
			pages: 'CS 110–11',
			title: 'Follow the Prophet',
			first_line: 'Adam was a prophet, first one that we know'
		},
		{
			pages: 'CS 112–13',
			title: 'The Commandments',
			first_line: "Thou shalt have no gods but Me"
		},
		{
			pages: 'CS 114–15',
			title: 'The Books in the Old Testament',
			first_line: 'Genesis, Exodus, Leviticus, Numbers'
		},
		{
			pages: 'CS 116–17',
			title: 'The Books in the New Testament',
			first_line: 'Matthew, Mark, Luke, John, the Acts and Romans'
		},
		{
			pages: 'CS 118–19',
			title: 'Book of Mormon Stories'
		},
		{
			pages: 'CS 119',
			title: 'The Books in the Book of Mormon',
			first_line: 'First and second books of Nephi'
		},
		{
			pages: 'CS 120–21',
			title: "Nephi's Courage",
			first_line: "The Lord commanded Nephi to go and get the plates"
		},
		{
			pages: 'CS 122',
			title: 'The First Article of Faith',
			first_line: "We believe in God, the Eternal Father"
		},
		{
			pages: 'CS 122',
			title: 'The Second Article of Faith',
			first_line: "We believe that men will be punished for their own sins"
		},
		{
			pages: 'CS 123',
			title: 'The Third Article of Faith',
			first_line: "We believe that through the Atonement of Christ"
		},
		{
			pages: 'CS 124',
			title: 'The Fourth Article of Faith',
			first_line: "We believe that the first principles and ordinances of the Gospel are"
		},
		{
			pages: 'CS 125',
			title: 'The Fifth Article of Faith',
			first_line: "We believe that a man must be called of God"
		},
		{
			pages: 'CS 126',
			title: 'The Sixth Article of Faith',
			first_line: "We believe in the same organization that existed in the Primitive Church"
		},
		{
			pages: 'CS 126',
			title: 'The Seventh Article of Faith',
			first_line: "We believe in the gift of tongues, prophecy, revelation, visions"
		},
		{
			pages: 'CS 127',
			title: 'The Eighth Article of Faith',
			first_line: "We believe the Bible to be the word of God"
		},
		{
			pages: 'CS 128',
			title: 'The Ninth Article of Faith',
			first_line: 'We believe all that God has revealed'
		},
		{
			pages: 'CS 128–29',
			title: 'The Tenth Article of Faith',
			first_line: "We believe in the literal gathering of Israel"
		},
		{
			pages: 'CS 130',
			title: 'The Eleventh Article of Faith',
			first_line: "We claim the priv'lege of worshiping Almighty God"
		},
		{
			pages: 'CS 131',
			title: 'The Twelfth Article of Faith',
			first_line: "We believe in being subject to kings"
		},
		{
			pages: 'CS 132–33',
			title: 'The Thirteenth Article of Faith',
			first_line: 'We believe in being honest, true, chaste, benevolent'
		},
		{
			pages: 'CS 134',
			title: 'Latter-day Prophets'
		},
		{
			pages: 'CS 135',
			title: 'Our Bishop',
			first_line: 'Busy as a man can be'
		},
		{
			pages: 'CS 136',
			title: 'Love One Another',
			first_line: 'As I have loved you'
		},
		{
			pages: 'CS 138–39',
			title: 'Where Love Is'
		},
		{
			pages: 'CS 140–41',
			title: "I'll Walk with You",
			first_line: "If you don't walk as most people do"
		},
		{
			pages: 'CS 142–43',
			title: 'Every Star Is Different',
			first_line: "Ev'ry star is diff'rent"
		},
		{
			pages: 'CS 144',
			title: 'Shine On',
			first_line: 'My light is but a little one'
		},
		{
			pages: 'CS 145',
			title: 'A Special Gift Is Kindness',
			first_line: "foo"
		},
		{
			pages: 'CS 145',
			title: 'Kindness Begins with Me'
		},
		{
			pages: 'CS 146–47',
			title: 'Keep the Commandments'
		},
		{
			pages: 'CS 148',
			title: 'I Want to Live the Gospel'
		},
		{
			pages: 'CS 149',
			title: 'I Believe in Being Honest'
		},
		{
			pages: 'CS 150',
			title: "I'm Glad to Pay 6a Tithing"
		},
		{
			pages: 'CS 150',
			title: 'I Want to Give the Lord My Tenth'
		},
		{
			pages: 'CS 151',
			title: 'I Am Glad for Many Things'
		},
		{
			pages: 'CS 152',
			title: 'Hum Your Favorite Hymn',
			first_line: 'If on occasion you have found'
		},
		{
			pages: 'CS 153',
			title: 'The Lord Gave Me a Temple'
		},
		{
			pages: 'CS 154–55',
			title: 'The Word of Wisdom'
		},
		{
			pages: 'CS 155',
			title: 'Remember the Sabbath Day'
		},
		{
			pages: 'CS 156',
			title: 'The Chapel Doors'
		},
		{
			pages: 'CS 157',
			title: 'When I Go to Church',
			first_line: 'I always have a happy feeling'
		},
		{
			pages: 'CS 158',
			title: 'Dare to Do Right'
		},
		{
			pages: 'CS 159',
			title: 'Stand for the Right',
			first_line: "Our prophet has some words for you"
		},
		{
			pages: 'CS 160–61',
			title: 'Choose the Right Way',
			first_line: "There's a right way to live and be happy"
		},
		{
			pages: 'CS 161',
			title: 'I Pledge Myself to Love the Right'
		},
		{
			pages: 'CS 162',
			title: 'I Will Be Valiant',
			first_line: "The Lord needs valiant servants"
		},
		{
			pages: 'CS 163',
			title: 'I Am like a Star'
		},
		{
			pages: 'CS 164–65',
			title: "I Will Follow God's Plan",
			first_line: 'My life is a gift'
		},
		{
			pages: 'CS 166–67',
			title: 'A Young Man Prepared',
			first_line: "Though a boy I may appear"
		},
		{
			pages: 'CS 167',
			title: 'Go the Second Mile',
			first_line: "When there is a task to do, do it with a smile"
		},
		{
			pages: 'CS 168',
			title: 'I Want to Be a Missionary Now'
		},
		{
			pages: 'CS 169',
			title: 'I Hope They Call Me on a Mission'
		},
		{
			pages: 'CS 170–71',
			title: 'The Things I Do',
			first_line: "I'm much too young to go abroad"
		},
		{
			pages: 'CS 172–73',
			title: "We'll Bring the World His Truth: Army of Helaman",
			first_line: "We have been born, as Nephi of old"
		},
		{
			pages: 'CS 174–75',
			title: 'Called to Serve'
		},
		{
			pages: 'CS 176',
			title: 'Tell Me, Dear Lord'
		},
		{
			pages: 'CS 177',
			title: 'Teach Me to Walk in the Light'
		},
		{
			pages: 'CS 178–79',
			title: 'Teacher, Do You Love Me?'
		},
		{
			pages: 'CS 180–81',
			title: 'How Dear to God Are Little Children'
		},
		{
			pages: 'CS 182–85',
			title: 'How Will They Know?'
		},
		{
			pages: 'CS 188',
			title: 'Families Can Be Together Forever',
			first_line: "I have a fam'ly here on earth0247 "
		},
		{
			pages: 'CS 189',
			title: 'Family Prayer',
			first_line: 'Let us gather in a circle'
		},
		{
			pages: 'CS 190–91',
			title: 'Love Is Spoken Here',
			first_line: 'I see my mother kneeling with our family each day'
		},
		{
			pages: 'CS 192',
			title: 'Home'
		},
		{
			pages: 'CS 193',
			title: 'Sing Your Way Home'
		},
		{
			pages: 'CS 194',
			title: 'The Family',
			first_line: "When the fam'ly gets together, after evening work is done"
		},
		{
			pages: 'CS 195',
			title: 'Family Night',
			first_line: "This is the night we've waited for"
		},
		{
			pages: 'CS 196',
			title: 'Saturday'
		},
		{
			pages: 'CS 197',
			title: 'A Happy Helper'
		},
		{
			pages: 'CS 197',
			title: "Quickly I'll Obey"
		},
		{
			pages: 'CS 198',
			title: 'A Happy Family'
		},
		{
			pages: 'CS 198',
			title: "When We're Helping"
		},
		{
			pages: 'CS 199',
			title: 'I Have a Family Tree'
		},
		{
			pages: 'CS 200',
			title: 'Grandmother',
			first_line: "You give me a kiss"
		},
		{
			pages: 'CS 201',
			title: 'When Grandpa Comes',
			first_line: "It's always fun when grandpa comes"
		},
		{
			pages: 'CS 202',
			title: 'I Often Go Walking'
		},
		{
			pages: 'CS 203',
			title: 'My Mother Dear',
			first_line: 'Like sunshine in the morning that wakens day from night'
		},
		{
			pages: 'CS 204–5',
			title: 'Mother, Tell Me the Story'
		},
		{
			pages: 'CS 206',
			title: 'Mother Dear'
		},
		{
			pages: 'CS 206',
			title: 'Dearest Mother, I Love You'
		},
		{
			pages: 'CS 207',
			title: 'Mother, I Love You'
		},
		{
			pages: 'CS 208',
			title: 'The Dearest Names',
			first_line: 'I know a name, a glorious name'
		},
		{
			pages: 'CS 209',
			title: 'Fathers',
			first_line: "The father of our home leads our family"
		},
		{
			pages: 'CS 210',
			title: "Daddy's Homecoming",
			first_line: "I'm so glad when daddy comes home"
		},
		{
			pages: 'CS 211',
			title: 'My Dad'
		},
		{
			pages: 'CS 214',
			title: 'Pioneer Children Sang As They Walked'
		},
		{
			pages: 'CS 215',
			title: 'Pioneer Children Were Quick to Obey'
		},
		{
			pages: 'CS 216–17',
			title: 'Little Pioneer Children'
		},
		{
			pages: 'CS 217',
			title: 'Westward Ho!',
			first_line: "Over the winding trail forward we go"
		},
		{
			pages: 'CS 218–19',
			title: 'To Be a Pioneer',
			first_line: "You don't have to push a handcart"
		},
		{
			pages: 'CS 219',
			title: 'The Oxcart',
			first_line: 'Here comes the oxcart, oh, how slow'
		},
		{
			pages: 'CS 220',
			title: 'The Handcart Song',
			first_line: "When pioneers moved to the West"
		},
		{
			pages: 'CS 221',
			title: 'Covered Wagons',
			first_line: 'Day after day the wagons are rolling'
		},
		{
			pages: 'CS 222–23',
			title: 'Whenever I Think about Pioneers'
		},
		{
			pages: 'CS 224',
			title: 'My Country',
			first_line: "This is my country"
		},
		{
			pages: 'CS 225',
			title: 'My Flag, My Flag'
		},
		{
			pages: 'CS 228–29',
			title: 'My Heavenly Father Loves Me',
			first_line: "Whenever I hear the song of a bird"
		},
		{
			pages: 'CS 230',
			title: 'I Think the World Is Glorious'
		},
		{
			pages: 'CS 231',
			title: 'All Things Bright and Beautiful'
		},
		{
			pages: 'CS 232–33',
			title: 'Beauty Everywhere',
			first_line: "Skies are fair above us"
		},
		{
			pages: 'CS 233',
			title: 'The World Is So Lovely'
		},
		{
			pages: 'CS 234',
			title: 'Because God Loves Me',
			first_line: 'God planned the day'
		},
		{
			pages: 'CS 235',
			title: 'The World Is So Big'
		},
		{
			pages: 'CS 236',
			title: '“Give,” Said the Little Stream'
		},
		{
			pages: 'CS 237',
			title: 'The Prophet Said to Plant a Garden'
		},
		{
			pages: 'CS 239',
			title: "Because It's Spring",
			first_line: "Why is the sky so blue and clear?"
		},
		{
			pages: 'CS 240',
			title: 'In the Leafy Treetops'
		},
		{
			pages: 'CS 241',
			title: 'Birds in the Tree'
		},
		{
			pages: 'CS 241',
			title: 'Rain Is Falling All Around'
		},
		{
			pages: 'CS 242–43',
			title: 'Popcorn Popping',
			first_line: 'I looked out the window, and what did I see?'
		},
		{
			pages: 'CS 243',
			title: 'Little Seeds Lie Fast Asleep'
		},
		{
			pages: 'CS 244',
			title: 'Little Purple Pansies'
		},
		{
			pages: 'CS 245',
			title: 'Oh, What Do You Do in the Summertime?'
		},
		{
			pages: 'CS 246',
			title: "It's Autumntime"
		},
		{
			pages: 'CS 247',
			title: 'Autumn Day'
		},
		{
			pages: 'CS 248',
			title: 'Falling Snow'
		},
		{
			pages: 'CS 249',
			title: 'Once There Was a Snowman'
		},
		{
			pages: 'CS 252',
			title: 'Lift Up Your Voice and Sing',
			first_line: 'A song is a wonderful kind of thing'
		},
		{
			pages: 'CS 253',
			title: 'Sing a Song'
		},
		{
			pages: 'CS 253',
			title: 'Fun to Do'
		},
		{
			pages: 'CS 254',
			title: 'Hello, Friends!'
		},
		{
			pages: 'CS 254',
			title: 'Our Door Is Always Open'
		},
		{
			pages: 'CS 255',
			title: 'Come with Me to Primary',
			first_line: "Oh, come with me to Primary"
		},
		{
			pages: 'CS 256–57',
			title: 'We Welcome You'
		},
		{
			pages: 'CS 258',
			title: 'Our Primary Colors'
		},
		{
			pages: 'CS 259',
			title: "We're All Together Again"
		},
		{
			pages: 'CS 260',
			title: 'Hello Song'
		},
		{
			pages: 'CS 261',
			title: 'Here We Are Together'
		},
		{
			pages: 'CS 262',
			title: 'Friends Are Fun',
			first_line: 'It is fun to have a friend who will play with you'
		},
		{
			pages: 'CS 263',
			title: 'We Are Different',
			first_line: 'I know you, and you know me'
		},
		{
			pages: 'CS 264',
			title: 'Happy Song',
			first_line: 'Ducks in the pond quack a happy song'
		},
		{
			pages: 'CS 266',
			title: "If You're Happy"
		},
		{
			pages: 'CS 267',
			title: 'Smiles',
			first_line: "If you chance to meet a frown"
		},
		{
			pages: 'CS 267',
			title: 'A Smile Is like the Sunshine'
		},
		{
			pages: 'CS 268',
			title: 'Two Little Eyes'
		},
		{
			pages: 'CS 269',
			title: 'I Have Two Ears'
		},
		{
			pages: 'CS 270',
			title: 'Two Happy Feet',
			first_line: 'I have two happy little feet'
		},
		{
			pages: 'CS 271',
			title: 'I Wiggle'
		},
		{
			pages: 'CS 272',
			title: 'I Have Two Little Hands'
		},
		{
			pages: 'CS 273',
			title: 'My Hands'
		},
		{
			pages: 'CS 274',
			title: 'Roll Your Hands'
		},
		{
			pages: 'CS 275',
			title: 'Head, Shoulders, Knees, and Toes'
		},
		{
			pages: 'CS 275',
			title: 'To Get Quiet'
		},
		{
			pages: 'CS 276',
			title: "Do As I'm Doing"
		},
		{
			pages: 'CS 277',
			title: 'Hinges',
			first_line: "I'm all made of hinges, 'cause ev'rything bends"
		},
		{
			pages: 'CS 278',
			title: 'Stand Up',
			first_line: 'I will stand up when "stand up" is said'
		},
		{
			pages: 'CS 279',
			title: 'Oh, How We Love to Stand'
		},
		{
			pages: 'CS 280',
			title: 'Healthy, Wealthy, and Wise',
			first_line: 'Early to bed and early to rise'
		},
		{
			pages: 'CS 281',
			title: 'The Wise Man and the Foolish Man'
		},
		{
			pages: 'CS 282',
			title: 'Feliz Cumpleaños'
		},
		{
			pages: 'CS 283',
			title: 'Your Happy Birthday',
			first_line: "This month is such a special one"
		},
		{
			pages: 'CS 284',
			title: 'Happy, Happy Birthday'
		},
		{
			pages: 'CS 284–85',
			title: 'Have a Very Happy Birthday!'
		},
		{
			pages: 'CS 285',
			title: "You've Had a Birthday"
		},
		{
			pages: 'Hymns 1',
			title: 'The Morning Breaks'
		},
		{
			pages: 'Hymns 2',
			title: 'The Spirit of God'
		},
		{
			pages: 'Hymns 3',
			title: 'Now Let Us Rejoice'
		},
		{
			pages: 'Hymns 4',
			title: 'Truth Eternal'
		},
		{
			pages: 'Hymns 5',
			title: 'High on the Mountain Top'
		},
		{
			pages: 'Hymns 6',
			title: 'Redeemer of Israel'
		},
		{
			pages: 'Hymns 7',
			title: 'Israel, Israel, God Is Calling'
		},
		{
			pages: 'Hymns 8',
			title: 'Awake and Arise'
		},
		{
			pages: 'Hymns 9',
			title: 'Come, Rejoice'
		},
		{
			pages: 'Hymns 10',
			title: 'Come, Sing to the Lord'
		},
		{
			pages: 'Hymns 11',
			title: 'What Was Witnessed in the Heavens?'
		},
		{
			pages: 'Hymns 12',
			title: "'Twas Witnessed in the Morning Sky"
		},
		{
			pages: 'Hymns 13',
			title: 'An Angel from on High'
		},
		{
			pages: 'Hymns 14',
			title: 'Sweet Is the Peace the Gospel Brings'
		},
		{
			pages: 'Hymns 15',
			title: 'I Saw a Mighty Angel Fly'
		},
		{
			pages: 'Hymns 16',
			title: 'What Glorious Scenes Mine Eyes Behold'
		},
		{
			pages: 'Hymns 17',
			title: 'Awake, Ye Saints of God, Awake!'
		},
		{
			pages: 'Hymns 18',
			title: 'The Voice of God Again Is Heard'
		},
		{
			pages: 'Hymns 19',
			title: 'We Thank Thee, O God, for a Prophet'
		},
		{
			pages: 'Hymns 20',
			title: 'God of Power, God of Right'
		},
		{
			pages: 'Hymns 21',
			title: "Come, Listen to a Prophet's Voice"
		},
		{
			pages: 'Hymns 22',
			title: "We Listen to a Prophet's Voice"
		},
		{
			pages: 'Hymns 23',
			title: 'We Ever Pray for Thee'
		},
		{
			pages: 'Hymns 24',
			title: 'God Bless Our Prophet Dear'
		},
		{
			pages: 'Hymns 25',
			title: "Now We'll Sing with One Accord"
		},
		{
			pages: 'Hymns 26',
			title: "Joseph Smith's First Prayer",
			first_line: 'Oh, how lovely was the morning'
		},
		{
			pages: 'Hymns 27',
			title: 'Praise to the Man'
		},
		{
			pages: 'Hymns 28',
			title: 'Saints, Behold How Great Jehovah'
		},
		{
			pages: 'Hymns 29',
			title: 'A Poor Wayfaring Man of Grief'
		},
		{
			pages: 'Hymns 30',
			title: 'Come, Come, Ye Saints'
		},
		{
			pages: 'Hymns 31',
			title: 'O God, Our Help in Ages Past'
		},
		{
			pages: 'Hymns 32',
			title: 'The Happy Day at Last Has Come'
		},
		{
			pages: 'Hymns 33',
			title: 'Our Mountain Home So Dear'
		},
		{
			pages: 'Hymns 34',
			title: 'O Ye Mountains High'
		},
		{
			pages: 'Hymns 35',
			title: 'For the Strength of the Hills'
		},
		{
			pages: 'Hymns 36',
			title: 'They, the Builders of the Nation'
		},
		{
			pages: 'Hymns 37',
			title: 'The Wintry Day, Descending to Its Close'
		},
		{
			pages: 'Hymns 38',
			title: 'Come, All Ye Saints of Zion'
		},
		{
			pages: 'Hymns 39',
			title: 'O Saints of Zion'
		},
		{
			pages: 'Hymns 40',
			title: 'Arise, O Glorious Zion'
		},
		{
			pages: 'Hymns 41',
			title: 'Let Zion in Her Beauty Rise'
		},
		{
			pages: 'Hymns 42',
			title: "Hail to the Brightness of Zion's Glad Morning!"
		},
		{
			pages: 'Hymns 43',
			title: 'Zion Stands with Hills Surrounded'
		},
		{
			pages: 'Hymns 44',
			title: 'Beautiful Zion, Built Above'
		},
		{
			pages: 'Hymns 45',
			title: 'Lead Me into Life Eternal'
		},
		{
			pages: 'Hymns 46',
			title: 'Glorious Things of Thee Are Spoken'
		},
		{
			pages: 'Hymns 47',
			title: 'We Will Sing of Zion'
		},
		{
			pages: 'Hymns 48',
			title: 'Glorious Things Are Sung of Zion'
		},
		{
			pages: 'Hymns 49',
			title: 'Adam-ondi-Ahman',
			first_line: 'This earth was once a garden place'
		},
		{
			pages: 'Hymns 50',
			title: 'Come, Thou Glorious Day of Promise'
		},
		{
			pages: 'Hymns 51',
			title: 'Sons of Michael, He Approaches'
		},
		{
			pages: 'Hymns 52',
			title: 'The Day Dawn Is Breaking'
		},
		{
			pages: 'Hymns 53',
			title: "Let Earth's Inhabitants Rejoice"
		},
		{
			pages: 'Hymns 54',
			title: 'Behold, the Mountain of the Lord'
		},
		{
			pages: 'Hymns 55',
			title: 'Lo, the Mighty God Appearing!'
		},
		{
			pages: 'Hymns 56',
			title: 'Softly Beams the Sacred Dawning'
		},
		{
			pages: 'Hymns 57',
			title: "We're Not Ashamed to Own Our Lord"
		},
		{
			pages: 'Hymns 58',
			title: 'Come, Ye Children of the Lord'
		},
		{
			pages: 'Hymns 59',
			title: 'Come, O Thou King of Kings'
		},
		{
			pages: 'Hymns 60',
			title: 'Battle Hymn of the Republic',
			first_line: 'Mine eyes have seen the glory of the coming of the Lord'
		},
		{
			pages: 'Hymns 61',
			title: 'Raise Your Voices to the Lord'
		},
		{
			pages: 'Hymns 62',
			title: 'All Creatures of Our God and King'
		},
		{
			pages: 'Hymns 63',
			title: 'Great King of Heaven'
		},
		{
			pages: 'Hymns 64',
			title: 'On This Day of Joy and Gladness'
		},
		{
			pages: 'Hymns 65',
			title: 'Come, All Ye Saints Who Dwell on Earth'
		},
		{
			pages: 'Hymns 66',
			title: 'Rejoice, the Lord Is King!'
		},
		{
			pages: 'Hymns 67',
			title: 'Glory to God on High'
		},
		{
			pages: 'Hymns 68',
			title: 'A Mighty Fortress Is Our God'
		},
		{
			pages: 'Hymns 69',
			title: 'All Glory, Laud, and Honor'
		},
		{
			pages: 'Hymns 70',
			title: 'Sing Praise to Him'
		},
		{
			pages: 'Hymns 71',
			title: 'With Songs of Praise'
		},
		{
			pages: 'Hymns 72',
			title: 'Praise to the Lord, the Almighty'
		},
		{
			pages: 'Hymns 73',
			title: 'Praise the Lord with Heart and Voice'
		},
		{
			pages: 'Hymns 74',
			title: 'Praise Ye the Lord'
		},
		{
			pages: 'Hymns 75',
			title: 'In Hymns of Praise'
		},
		{
			pages: 'Hymns 76',
			title: 'God of Our Fathers, We Come unto Thee'
		},
		{
			pages: 'Hymns 77',
			title: 'Great Is the Lord'
		},
		{
			pages: 'Hymns 78',
			title: 'God of Our Fathers, Whose Almighty Hand'
		},
		{
			pages: 'Hymns 79',
			title: 'With All the Power of Heart and Tongue'
		},
		{
			pages: 'Hymns 80',
			title: 'God of Our Fathers, Known of Old'
		},
		{
			pages: 'Hymns 81',
			title: 'Press Forward, Saints'
		},
		{
			pages: 'Hymns 82',
			title: 'For All the Saints'
		},
		{
			pages: 'Hymns 83',
			title: 'Guide Us, O Thou Great Jehovah'
		},
		{
			pages: 'Hymns 84',
			title: 'Faith of Our Fathers'
		},
		{
			pages: 'Hymns 85',
			title: 'How Firm a Foundation'
		},
		{
			pages: 'Hymns 86',
			title: 'How Great Thou Art'
		},
		{
			pages: 'Hymns 87',
			title: 'God Is Love',
			first_line: "Earth, with her ten thousand flow'rs"
		},
		{
			pages: 'Hymns 88',
			title: 'Great God, Attend While Zion Sings'
		},
		{
			pages: 'Hymns 89',
			title: 'The Lord Is My Light'
		},
		{
			pages: 'Hymns 90',
			title: 'From All That Dwell below the Skies'
		},
		{
			pages: 'Hymns 91',
			title: 'Father, Thy Children to Thee Now Raise'
		},
		{
			pages: 'Hymns 92',
			title: 'For the Beauty of the Earth'
		},
		{
			pages: 'Hymns 93',
			title: 'Prayer of Thanksgiving',
			first_line: "We gather together to ask the Lord's blessing"
		},
		{
			pages: 'Hymns 94',
			title: 'Come, Ye Thankful People'
		},
		{
			pages: 'Hymns 95',
			title: 'Now Thank We All Our God'
		},
		{
			pages: 'Hymns 96',
			title: 'Dearest Children, God Is Near You'
		},
		{
			pages: 'Hymns 97',
			title: 'Lead, Kindly Light'
		},
		{
			pages: 'Hymns 98',
			title: 'I Need Thee Every Hour'
		},
		{
			pages: 'Hymns 99',
			title: 'Nearer, Dear Savior, to Thee'
		},
		{
			pages: 'Hymns 100',
			title: 'Nearer, My God, to Thee'
		},
		{
			pages: 'Hymns 101',
			title: 'Guide Me to Thee',
			first_line: 'Jesus, my Savior true'
		},
		{
			pages: 'Hymns 102',
			title: 'Jesus, Lover of My Soul'
		},
		{
			pages: 'Hymns 103',
			title: 'Precious Savior, Dear Redeemer'
		},
		{
			pages: 'Hymns 104',
			title: 'Jesus, Savior, Pilot Me'
		},
		{
			pages: 'Hymns 105',
			title: 'Master, the Tempest Is Raging'
		},
		{
			pages: 'Hymns 106',
			title: 'God Speed the Right',
			first_line: "Now to heav'n our prayer ascending"
		},
		{
			pages: 'Hymns 107',
			title: 'Lord, Accept Our True Devotion'
		},
		{
			pages: 'Hymns 108',
			title: 'The Lord Is My Shepherd'
		},
		{
			pages: 'Hymns 109',
			title: 'The Lord My Pasture Will Prepare'
		},
		{
			pages: 'Hymns 110',
			title: 'Cast Thy Burden upon the Lord'
		},
		{
			pages: 'Hymns 111',
			title: 'Rock of Ages'
		},
		{
			pages: 'Hymns 112',
			title: 'Savior, Redeemer of My Soul'
		},
		{
			pages: 'Hymns 113',
			title: "Our Savior's Love"
		},
		{
			pages: 'Hymns 114',
			title: 'Come unto Him',
			first_line: 'I wander through the still of night'
		},
		{
			pages: 'Hymns 115',
			title: 'Come, Ye Disconsolate'
		},
		{
			pages: 'Hymns 116',
			title: 'Come, Follow Me'
		},
		{
			pages: 'Hymns 117',
			title: 'Come unto Jesus'
		},
		{
			pages: 'Hymns 118',
			title: 'Ye Simple Souls Who Stray'
		},
		{
			pages: 'Hymns 119',
			title: 'Come, We That Love the Lord'
		},
		{
			pages: 'Hymns 120',
			title: 'Lean on My Ample Arm'
		},
		{
			pages: 'Hymns 121',
			title: "I'm a Pilgrim, I'm a Stranger"
		},
		{
			pages: 'Hymns 122',
			title: 'Though Deepening Trials'
		},
		{
			pages: 'Hymns 123',
			title: 'Oh, May My Soul Commune with Thee'
		},
		{
			pages: 'Hymns 124',
			title: 'Be Still, My Soul'
		},
		{
			pages: 'Hymns 125',
			title: "How Gentle God's Commands"
		},
		{
			pages: 'Hymns 126',
			title: 'How Long, O Lord Most Holy and True'
		},
		{
			pages: 'Hymns 127',
			title: 'Does the Journey Seem Long?'
		},
		{
			pages: 'Hymns 128',
			title: 'When Faith Endures',
			first_line: 'I will not doubt, I will not fear'
		},
		{
			pages: 'Hymns 129',
			title: 'Where Can I Turn for Peace?'
		},
		{
			pages: 'Hymns 130',
			title: 'Be Thou Humble'
		},
		{
			pages: 'Hymns 131',
			title: 'More Holiness Give Me'
		},
		{
			pages: 'Hymns 132',
			title: 'God Is in His Holy Temple'
		},
		{
			pages: 'Hymns 133',
			title: 'Father in Heaven'
		},
		{
			pages: 'Hymns 134',
			title: 'I Believe in Christ'
		},
		{
			pages: 'Hymns 135',
			title: 'My Redeemer Lives',
			first_line: 'I know that my Redeemer lives'
		},
		{
			pages: 'Hymns 136',
			title: 'I Know That My Redeemer Lives'
		},
		{
			pages: 'Hymns 137',
			title: 'Testimony',
			first_line: 'The witness of the Holy Ghost'
		},
		{
			pages: 'Hymns 138',
			title: 'Bless Our Fast, We Pray',
			first_line: 'On bended knees, with broken hearts'
		},
		{
			pages: 'Hymns 139',
			title: 'In Fasting We Approach Thee'
		},
		{
			pages: 'Hymns 140',
			title: 'Did You Think to Pray?',
			first_line: 'Ere you left your room this morning'
		},
		{
			pages: 'Hymns 141',
			title: 'Jesus, the Very Thought of Thee'
		},
		{
			pages: 'Hymns 142',
			title: 'Sweet Hour of Prayer'
		},
		{
			pages: 'Hymns 143',
			title: 'Let the Holy Spirit Guide'
		},
		{
			pages: 'Hymns 144',
			title: 'Secret Prayer',
			first_line: 'There is an hour of peace and rest'
		},
		{
			pages: 'Hymns 145',
			title: "Prayer Is the Soul's Sincere Desire"
		},
		{
			pages: 'Hymns 146',
			title: 'Gently Raise the Sacred Strain'
		},
		{
			pages: 'Hymns 147',
			title: 'Sweet Is the Work'
		},
		{
			pages: 'Hymns 148',
			title: 'Sabbath Day',
			first_line: 'In sweet remembrance of thy Son'
		},
		{
			pages: 'Hymns 149',
			title: 'As the Dew from Heaven Distilling'
		},
		{
			pages: 'Hymns 150',
			title: 'O Thou Kind and Gracious Father'
		},
		{
			pages: 'Hymns 151',
			title: 'We Meet, Dear Lord'
		},
		{
			pages: 'Hymns 152',
			title: 'God Be with You Till We Meet Again'
		},
		{
			pages: 'Hymns 153',
			title: 'Lord, We Ask Thee Ere We Part'
		},
		{
			pages: 'Hymns 154',
			title: 'Father, This Hour Has Been One of Joy'
		},
		{
			pages: 'Hymns 155',
			title: 'We Have Partaken of Thy Love'
		},
		{
			pages: 'Hymns 156',
			title: 'Sing We Now at Parting'
		},
		{
			pages: 'Hymns 157',
			title: 'Thy Spirit, Lord, Has Stirred Our Souls'
		},
		{
			pages: 'Hymns 158',
			title: 'Before Thee, Lord, I Bow My Head'
		},
		{
			pages: 'Hymns 159',
			title: 'Now the Day Is Over'
		},
		{
			pages: 'Hymns 160',
			title: 'Softly Now the Light of Day'
		},
		{
			pages: 'Hymns 161',
			title: 'The Lord Be with Us'
		},
		{
			pages: 'Hymns 162',
			title: 'Lord, We Come before Thee Now'
		},
		{
			pages: 'Hymns 163',
			title: 'Lord, Dismiss Us with Thy Blessing'
		},
		{
			pages: 'Hymns 164',
			title: 'Great God, to Thee My Evening Song'
		},
		{
			pages: 'Hymns 165',
			title: "Abide with Me; 'Tis Eventide"
		},
		{
			pages: 'Hymns 166',
			title: 'Abide with Me!'
		},
		{
			pages: 'Hymns 167',
			title: 'Come, Let Us Sing an Evening Hymn'
		},
		{
			pages: 'Hymns 168',
			title: 'As the Shadows Fall'
		},
		{
			pages: 'Hymns 169',
			title: 'As Now We Take the Sacrament'
		},
		{
			pages: 'Hymns 170',
			title: 'God, Our Father, Hear Us Pray'
		},
		{
			pages: 'Hymns 171',
			title: 'With Humble Heart'
		},
		{
			pages: 'Hymns 172',
			title: 'In Humility, Our Savior'
		},
		{
			pages: 'Hymns 173',
			title: 'While of These Emblems We Partake'
		},
		{
			pages: 'Hymns 174',
			title: 'While of These Emblems We Partake'
		},
		{
			pages: 'Hymns 175',
			title: 'O God, the Eternal Father'
		},
		{
			pages: 'Hymns 176',
			title: "'Tis Sweet to Sing the Matchless Love"
		},
		{
			pages: 'Hymns 177',
			title: "'Tis Sweet To Sing the Matchless Love"
		},
		{
			pages: 'Hymns 178',
			title: 'O Lord of Hosts'
		},
		{
			pages: 'Hymns 179',
			title: 'Again, Our Dear Redeeming Lord'
		},
		{
			pages: 'Hymns 180',
			title: 'Father in Heaven, We Do Believe'
		},
		{
			pages: 'Hymns 181',
			title: 'Jesus of Nazareth, Savior and King'
		},
		{
			pages: 'Hymns 182',
			title: "We'll Sing All Hail to Jesus' Name"
		},
		{
			pages: 'Hymns 183',
			title: 'In Remembrance of Thy Suffering'
		},
		{
			pages: 'Hymns 184',
			title: 'Upon the Cross of Calvary'
		},
		{
			pages: 'Hymns 185',
			title: 'Reverently and Meekly Now',
			first_line: "Rev'rently and meekly now"
		},
		{
			pages: 'Hymns 186',
			title: 'Again We Meet around the Board'
		},
		{
			pages: 'Hymns 187',
			title: 'God Loved Us, So He Sent His Son'
		},
		{
			pages: 'Hymns 188',
			title: 'Thy Will, O Lord, Be Done',
			first_line: 'When in the wondrous realms above'
		},
		{
			pages: 'Hymns 189',
			title: 'O Thou, Before the World Began'
		},
		{
			pages: 'Hymns 190',
			title: 'In Memory of the Crucified'
		},
		{
			pages: 'Hymns 191',
			title: 'Behold the Great Redeemer Die'
		},
		{
			pages: 'Hymns 192',
			title: 'He Died! The Great Redeemer Died'
		},
		{
			pages: 'Hymns 193',
			title: 'I Stand All Amazed'
		},
		{
			pages: 'Hymns 194',
			title: 'There Is a Green Hill Far Away'
		},
		{
			pages: 'Hymns 195',
			title: 'How Great the Wisdom and the Love'
		},
		{
			pages: 'Hymns 196',
			title: 'Jesus, Once of Humble Birth'
		},
		{
			pages: 'Hymns 197',
			title: 'O Savior, Thou Who Wearest a Crown'
		},
		{
			pages: 'Hymns 198',
			title: 'That Easter Morn'
		},
		{
			pages: 'Hymns 199',
			title: 'He Is Risen!'
		},
		{
			pages: 'Hymns 200',
			title: 'Christ the Lord Is Risen Today'
		},
		{
			pages: 'Hymns 201',
			title: 'Joy to the World'
		},
		{
			pages: 'Hymns 202',
			title: 'Oh, Come, All Ye Faithful'
		},
		{
			pages: 'Hymns 203',
			title: 'Angels We Have Heard on High'
		},
		{
			pages: 'Hymns 204',
			title: 'Silent Night'
		},
		{
			pages: 'Hymns 205',
			title: "Once in Royal David's City"
		},
		{
			pages: 'Hymns 206',
			title: 'Away in a Manger'
		},
		{
			pages: 'Hymns 207',
			title: 'It Came upon the Midnight Clear'
		},
		{
			pages: 'Hymns 208',
			title: 'O Little Town of Bethlehem'
		},
		{
			pages: 'Hymns 209',
			title: 'Hark! The Herald Angels Sing'
		},
		{
			pages: 'Hymns 210',
			title: 'With Wondering Awe'
		},
		{
			pages: 'Hymns 211',
			title: 'While Shepherds Watched Their Flocks'
		},
		{
			pages: 'Hymns 212',
			title: "Far, Far Away on Judea's Plains"
		},
		{
			pages: 'Hymns 213',
			title: 'The First Noel'
		},
		{
			pages: 'Hymns 214',
			title: 'I Heard the Bells on Christmas Day'
		},
		{
			pages: 'Hymns 215',
			title: 'Ring Out, Wild Bells'
		},
		{
			pages: 'Hymns 216',
			title: 'We Are Sowing'
		},
		{
			pages: 'Hymns 217',
			title: 'Come, Let Us Anew'
		},
		{
			pages: 'Hymns 218',
			title: 'We Give Thee But Thine Own'
		},
		{
			pages: 'Hymns 219',
			title: 'Because I Have Been Given Much'
		},
		{
			pages: 'Hymns 220',
			title: 'Lord, I Would Follow Thee',
			first_line: 'Savior, may I learn to love thee'
		},
		{
			pages: 'Hymns 221',
			title: 'Dear to the Heart of the Shepherd'
		},
		{
			pages: 'Hymns 222',
			title: 'Hear Thou Our Hymn, O Lord'
		},
		{
			pages: 'Hymns 223',
			title: 'Have I Done Any Good?'
		},
		{
			pages: 'Hymns 224',
			title: 'I Have Work Enough to Do'
		},
		{
			pages: 'Hymns 225',
			title: 'We Are Marching On to Glory'
		},
		{
			pages: 'Hymns 226',
			title: 'Improve the Shining Moments'
		},
		{
			pages: 'Hymns 227',
			title: 'There Is Sunshine in My Soul Today'
		},
		{
			pages: 'Hymns 228',
			title: 'You Can Make the Pathway Bright'
		},
		{
			pages: 'Hymns 229',
			title: 'Today, While the Sun Shines'
		},
		{
			pages: 'Hymns 230',
			title: 'Scatter Sunshine',
			first_line: 'In a world where sorrow'
		},
		{
			pages: 'Hymns 231',
			title: 'Father, Cheer Our Souls Tonight'
		},
		{
			pages: 'Hymns 232',
			title: 'Let Us Oft Speak Kind Words'
		},
		{
			pages: 'Hymns 233',
			title: 'Nay, Speak No Ill'
		},
		{
			pages: 'Hymns 234',
			title: 'Jesus, Mighty King in Zion'
		},
		{
			pages: 'Hymns 235',
			title: 'Should You Feel Inclined to Censure'
		},
		{
			pages: 'Hymns 236',
			title: 'Lord, Accept into Thy Kingdom'
		},
		{
			pages: 'Hymns 237',
			title: 'Do What Is Right'
		},
		{
			pages: 'Hymns 238',
			title: 'Behold Thy Sons and Daughters, Lord'
		},
		{
			pages: 'Hymns 239',
			title: 'Choose the Right'
		},
		{
			pages: 'Hymns 240',
			title: 'Know This, That Every Soul Is Free'
		},
		{
			pages: 'Hymns 241',
			title: 'Count Your Blessings',
			first_line: "When upon life's billows you are tempest-tossed"
		},
		{
			pages: 'Hymns 242',
			title: 'Praise God, from Whom All Blessings Flow'
		},
		{
			pages: 'Hymns 243',
			title: 'Let Us All Press On'
		},
		{
			pages: 'Hymns 244',
			title: 'Come Along, Come Along'
		},
		{
			pages: 'Hymns 245',
			title: 'This House We Dedicate to Thee'
		},
		{
			pages: 'Hymns 246',
			title: 'Onward, Christian Soldiers'
		},
		{
			pages: 'Hymns 247',
			title: 'We Love Thy House, O God'
		},
		{
			pages: 'Hymns 248',
			title: 'Up, Awake, Ye Defenders of Zion'
		},
		{
			pages: 'Hymns 249',
			title: 'Called to Serve'
		},
		{
			pages: 'Hymns 250',
			title: 'We Are All Enlisted'
		},
		{
			pages: 'Hymns 251',
			title: 'Behold! A Royal Army'
		},
		{
			pages: 'Hymns 252',
			title: 'Put Your Shoulder to the Wheel',
			first_line: 'The world has need of willing men'
		},
		{
			pages: 'Hymns 253',
			title: 'Like Ten Thousand Legions Marching'
		},
		{
			pages: 'Hymns 254',
			title: 'True to the Faith',
			first_line: 'Shall the youth of Zion falter'
		},
		{
			pages: 'Hymns 255',
			title: 'Carry On',
			first_line: 'Firm as the mountains around us'
		},
		{
			pages: 'Hymns 256',
			title: "As Zion's Youth in Latter Days"
		},
		{
			pages: 'Hymns 257',
			title: 'Rejoice! A Glorious Sound Is Heard'
		},
		{
			pages: 'Hymns 258',
			title: 'O Thou Rock of Our Salvation'
		},
		{
			pages: 'Hymns 259',
			title: 'Hope of Israel'
		},
		{
			pages: 'Hymns 260',
			title: "Who's on the Lord's Side?"
		},
		{
			pages: 'Hymns 261',
			title: 'Thy Servants Are Prepared'
		},
		{
			pages: 'Hymns 262',
			title: 'Go, Ye Messengers of Glory'
		},
		{
			pages: 'Hymns 263',
			title: 'Go Forth with Faith'
		},
		{
			pages: 'Hymns 264',
			title: 'Hark, All Ye Nations!'
		},
		{
			pages: 'Hymns 265',
			title: 'Arise, O God, and Shine'
		},
		{
			pages: 'Hymns 266',
			title: 'The Time Is Far Spent'
		},
		{
			pages: 'Hymns 267',
			title: 'How Wondrous and Great'
		},
		{
			pages: 'Hymns 268',
			title: 'Come, All Whose Souls Are Lighted'
		},
		{
			pages: 'Hymns 269',
			title: 'Jehovah, Lord of Heaven and Earth'
		},
		{
			pages: 'Hymns 270',
			title: "I'll Go Where You Want Me to Go",
			first_line: 'It may not be on the mountain height'
		},
		{
			pages: 'Hymns 271',
			title: 'Oh, Holy Words of Truth and Love'
		},
		{
			pages: 'Hymns 272',
			title: 'Oh Say, What Is Truth?'
		},
		{
			pages: 'Hymns 273',
			title: 'Truth Reflects upon Our Senses'
		},
		{
			pages: 'Hymns 274',
			title: 'The Iron Rod',
			first_line: 'To Nephi, seer of olden time'
		},
		{
			pages: 'Hymns 275',
			title: 'Men Are That They Might Have Joy',
			first_line: 'A voice hath spoken from the dust'
		},
		{
			pages: 'Hymns 276',
			title: 'Come Away to the Sunday School',
			first_line: 'When the rosy light of morning'
		},
		{
			pages: 'Hymns 277',
			title: 'As I Search the Holy Scriptures'
		},
		{
			pages: 'Hymns 278',
			title: 'Thanks for the Sabbath School'
		},
		{
			pages: 'Hymns 279',
			title: 'Thy Holy Word',
			first_line: 'We love to hear thy holy word'
		},
		{
			pages: 'Hymns 280',
			title: 'Welcome, Welcome, Sabbath Morning'
		},
		{
			pages: 'Hymns 281',
			title: 'Help Me Teach with Inspiration'
		},
		{
			pages: 'Hymns 282',
			title: 'We Meet Again in Sabbath School'
		},
		{
			pages: 'Hymns 283',
			title: 'The Glorious Gospel Light Has Shone'
		},
		{
			pages: 'Hymns 284',
			title: 'If You Could Hie to Kolob'
		},
		{
			pages: 'Hymns 285',
			title: 'God Moves in a Mysterious Way'
		},
		{
			pages: 'Hymns 286',
			title: 'Oh, What Songs of the Heart'
		},
		{
			pages: 'Hymns 287',
			title: 'Rise, Ye Saints, and Temples Enter'
		},
		{
			pages: 'Hymns 288',
			title: 'How Beautiful Thy Temples, Lord'
		},
		{
			pages: 'Hymns 289',
			title: 'Holy Temples on Mount Zion'
		},
		{
			pages: 'Hymns 290',
			title: 'Rejoice, Ye Saints of Latter Days'
		},
		{
			pages: 'Hymns 291',
			title: 'Turn Your Hearts'
		},
		{
			pages: 'Hymns 292',
			title: 'O My Father'
		},
		{
			pages: 'Hymns 293',
			title: 'Each Life That Touches Ours for Good'
		},
		{
			pages: 'Hymns 294',
			title: 'Love at Home',
			first_line: 'There is beauty all around'
		},
		{
			pages: 'Hymns 295',
			title: 'O Love That Glorifies the Son'
		},
		{
			pages: 'Hymns 296',
			title: 'Our Father, by Whose Name'
		},
		{
			pages: 'Hymns 297',
			title: 'From Homes of Saints Glad Songs Arise'
		},
		{
			pages: 'Hymns 298',
			title: 'Home Can Be a Heaven on Earth'
		},
		{
			pages: 'Hymns 299',
			title: 'Children of Our Heavenly Father'
		},
		{
			pages: 'Hymns 300',
			title: 'Families Can Be Together Forever',
			first_line: "I have a fam'ly here on earth"
		},
		{
			pages: 'Hymns 301',
			title: 'I Am a Child of God'
		},
		{
			pages: 'Hymns 302',
			title: 'I Know My Father Lives'
		},
		{
			pages: 'Hymns 303',
			title: 'Keep the Commandments'
		},
		{
			pages: 'Hymns 304',
			title: 'Teach Me to Walk in the Light'
		},
		{
			pages: 'Hymns 305',
			title: 'The Light Divine'
		},
		{
			pages: 'Hymns 306',
			title: "God's Daily Care",
			first_line: 'As I watch the rising sun'
		},
		{
			pages: 'Hymns 307',
			title: 'In Our Lovely Deseret'
		},
		{
			pages: 'Hymns 308',
			title: 'Love One Another',
			first_line: 'As I have loved you'
		},
		{
			pages: 'Hymns 309',
			title: 'As Sisters in Zion: (Women)'
		},
		{
			pages: 'Hymns 310',
			title: 'A Key Was Turned in Latter Days: (Women)'
		},
		{
			pages: 'Hymns 311',
			title: 'We Meet Again as Sisters: (Women)'
		},
		{
			pages: 'Hymns 312',
			title: 'We Ever Pray for Thee: (Women)'
		},
		{
			pages: 'Hymns 313',
			title: 'God Is Love: (Women)',
			first_line: "Earth, with her ten thousand flow'rs"
		},
		{
			pages: 'Hymns 314',
			title: "How Gentle God's Commands: (Women)"
		},
		{
			pages: 'Hymns 315',
			title: 'Jesus, the Very Thought of Thee: (Women)'
		},
		{
			pages: 'Hymns 316',
			title: 'The Lord Is My Shepherd: (Women)'
		},
		{
			pages: 'Hymns 317',
			title: 'Sweet Is the Work: (Women)'
		},
		{
			pages: 'Hymns 318',
			title: 'Love at Home: (Women)',
			first_line: 'There is beauty all around'
		},
		{
			pages: 'Hymns 319',
			title: 'Ye Elders of Israel: (Men)'
		},
		{
			pages: 'Hymns 320',
			title: 'The Priesthood of Our Lord: (Men)',
			first_line: "Brethren, pow'r by earthly standards"
		},
		{
			pages: 'Hymns 321',
			title: 'Ye Who Are Called to Labor: (Men)'
		},
		{
			pages: 'Hymns 322',
			title: 'Come, All Ye Sons of God: (Men)'
		},
		{
			pages: 'Hymns 323',
			title: "Rise Up, O Men of God: (Men's Choir)"
		},
		{
			pages: 'Hymns 324',
			title: 'Rise Up, O Men of God: (Men)'
		},
		{
			pages: 'Hymns 325',
			title: "See the Mighty Priesthood Gathered: (Men's Choir)"
		},
		{
			pages: 'Hymns 326',
			title: "Come, Come, Ye Saints: (Men's Choir)"
		},
		{
			pages: 'Hymns 327',
			title: "Go, Ye Messengers of Heaven: (Men's Choir)"
		},
		{
			pages: 'Hymns 328',
			title: "An Angel from on High: (Men's Choir)"
		},
		{
			pages: 'Hymns 329',
			title: "Thy Servants Are Prepared: (Men's Choir)"
		},
		{
			pages: 'Hymns 330',
			title: "See, the Mighty Angel Flying: (Men's Choir)"
		},
		{
			pages: 'Hymns 331',
			title: "Oh Say, What Is Truth?: (Men's Choir)"
		},
		{
			pages: 'Hymns 332',
			title: "Come, O Thou King of Kings: (Men's Choir)"
		},
		{
			pages: 'Hymns 333',
			title: "High on the Mountain Top: (Men's Choir)"
		},
		{
			pages: 'Hymns 334',
			title: "I Need Thee Every Hour: (Men's Choir)"
		},
		{
			pages: 'Hymns 335',
			title: "Brightly Beams Our Father's Mercy: (Men's Choir)"
		},
		{
			pages: 'Hymns 336',
			title: "School Thy Feelings: (Men's Choir)"
		},
		{
			pages: 'Hymns 337',
			title: "O Home Beloved: (Men's Choir)"
		},
		{
			pages: 'Hymns 338',
			title: 'America the Beautiful',
			first_line: 'Oh, beautiful for spacious skies'
		},
		{
			pages: 'Hymns 339',
			title: "My Country, 'Tis of Thee"
		},
		{
			pages: 'Hymns 340',
			title: 'The Star-Spangled Banner',
			first_line: "Oh say, can you see, by the dawn's early light"
		},
		{
			pages: 'Hymns 341',
			title: 'God Save the King'
		}
	];
	$( ".auto-complete" ).autocomplete({
		source: function( request, response ) {
			var sValue = request.term.toLowerCase();
			var aSearch = [];
			$(songs).each(function(i, song) {

				// Add the 'pages' and 'first_line' parameters if they don't exist
				if(typeof(song.first_line) === 'undefined') {
					song.first_line = '';
				}
				if(typeof(song.pages) === 'undefined') {
					song.pages = '';
				}

				// check to see if any of them match the search query
				var matchPages = song.pages.toLowerCase().search(sValue) != -1;
				var matchTitle = song.title.toLowerCase().search(sValue) != -1;
				var matchFirstLine = song.first_line.toLowerCase().search(sValue) != -1;

				if( matchPages || matchTitle || matchFirstLine ) {

					var songLabel = song.title;
					if(song.pages != '') {
						songLabel = '['+song.pages+'] '+songLabel;
					}

					var songValue = songLabel;

					// only show the first line if it's part of the search query but the query doesn't match the title
					if(
						!matchPages && !matchTitle &&
						song.first_line != ''
					) {
						songLabel = songLabel + ' ('+song.first_line+')';
					}

					aSearch.push({
						label: songLabel,
						value: songValue
					});
				}
			});

			response(aSearch);
		}
	});
	$( "#Date" ).datepicker();
});