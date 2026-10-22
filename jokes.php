<?php
    # Program: jokes.php
    #    Date: 23-May-2023
    #  Author: gerry.walterscheid@gmail.com
    # Descrip: Jokes for Kids.

    session_start();
    header("Content-type: text/xml");

    $delay = 60;
    header("Refresh:$delay");

    $urlPath = "http://192.168.3.250/cisco/jokes.php";

    $joke = array(
        "What does a cloud wear under his raincoat?",
        "Thunderwear.",

        "What did the traffic light say to the car?",
        "Don't look. I'm about to change.",

        "What did the fisherman say to the magician?",
        "Pick a cod, any cod.",

        "What did the snowman say to the other snowman?",
        "Do you smell carrots?",

        "Why can't Cinderella play soccer?",
        "Because she's always running away from the ball.",

        "Why can't you give Elsa a balloon?",
        "She will Let It Go.",

        "Did you hear about the kidnapping in the park?",
        "They woke him up.",

        "Why is there a fence around a cemetery?",
        "People are dying to get in.",

        "What music frightens balloons?",
        "Pop music.",

        "How does Darth Vader like his toast?",
        "On the dark side.",

        "What room doesn't have doors?",
        "A mushroom.",

        "What do you say when you lose a Wii game?",
        "I want a Wii-match.",

        "What do Alexander the Great and Winnie the Pooh have in common?",
        "The same middle name.",

        "Why did the golfer wear two pairs of pants?",
        "In case he got a hole in one.",

        "What did the policeman say to his belly button?",
        "You're under a vest.",

        "Why is Peter Pan always flying?",
        "Because he never lands.",

        "How do you make a tissue dance?",
        "Put a little boogie in it.",

        "Why was the broom late?",
        "It over-swept.",

        "What did one toilet say to the other toilet?",
        "You look flushed.",

        "Which is the longest word in the dictionary?",
        "\"Smiles\" because there are miles between each \"s\".",

        "What stays in a corner and travels all over the world?",
        "A postage stamp.",

        "Did you hear the joke about the roof?",
        "Never mind, it's over your head.",

        "What did the stamp say to the envelope?",
        "Stick with me and we'll go places together.",

        "What race is never run?",
        "A swimming race.",

        "Why did the little boy throw his clock out the window?",
        "Because he wanted to see time fly.",

        "What has two legs but can't walk?",
        "A pair of pants.",

        "How does a train eat?",
        "It goes chew chew.",

        "Do you know how many famous men and women were born on your birthday?",
        "None, only babies.",

        "What do you call a toothless bear?",
        "A gummy bear.",

        "What happens if it rains cats and dogs?",
        "You need to watch for poodles.",

        "What do you get when you cross a Labrador and a magician?",
        "A labracadabrador!",

        "What did the marlin say to the swordfish?",
        "You're looking sharp.",

        "Why are fish so smart?",
        "Because they swim in schools.",

        "How do snails fight?",
        "They slug it out.",

        "What is a deer with no eyes called?",
        "No \"eye-deer\" (idea)",

        "What's a snake's favorite subject?",
        "Hiss-tory.",

        "How does a squid go into battle?",
        "Well armed.",

        "Why can't you trust the king of the jungle?",
        "Because he's always lion.",

        "What do porcupines say when they kiss?",
        "Ouch.",

        "Why do cats make terrible storytellers?",
        "They only have one tail.",

        "What kind of key opens a banana?",
        "A mon-key.",

        "Why are penguins socially awkward?",
        "Because they can't break the ice.",

        "What's a cow's favorite holiday?",
        "Moo Year's Eve.",

        "Where do sheep go to get haircuts?",
        "The baa-baa shop.",

        "Why did the dinosaur cross the road?",
        "The chicken hadn't evolved yet.",

        "How do cats bake cakes?",
        "From scratch.",

        "Why did the firefly get bad grades in school?",
        "He wasn't very bright.",

        "Why wouldn't the shrimp share his treasure?",
        "Because he was a little shellfish.",

        "What did the judge say when the skunk walked into the courtroom?",
        "Odor in the court.",

        "How do you keep a bull from charging?",
        "Take away its credit card.",

        "What do you give a sick bird?",
        "A tweetment.",

        "Where does a polar bear keep his money?",
        "A snow bank.",

        "What do cows read?",
        "CATTLE-logs.",

        "What animal needs oil?",
        "A mouse because it squeaks.",

        "What animal is best at hitting a ball?",
        "A bat.",

        "What is a cat's favorite color?",
        "PURRRR-ple.",

        "What kind of cat likes water?",
        "An octo-PUSS.",

        "What do you call a dog who goes to the beach in the summer?",
        "A hot dog.",

        "Why do tigers have stripes?",
        "So they don't get spotted.",

        "What time is it when people are throwing pieces of bread at your head?",
        "Time to duck.",

        "What bone will a dog never eat?",
        "A trombone.",

        "What did the asparagus say to the mushroom?",
        "You're a fun guy.",

        "What does a nosy pepper do?",
        "It gets jalapeño business! (all-up-in-yo business)",

        "What kind of nut has no shell?",
        "A doughnut.",

        "Why do we put candles on the top of a birthday cake?",
        "Because it's too hard to put them on the bottom.",

        "What do you give a sick lemon?",
        "Lemon aid.",

        "Why did the melon jump into the lake?",
        "Because he wanted to be a watermelon.",

        "What are the two things you can't have for breakfast?",
        "Lunch and dinner.",

        "What did the boring egg say to the funny egg?",
        "You crack me up.",

        "What do you call a fake noodle?",
        "An IM-pasta.",

        "What did the nut say when it got a cold?",
        "Cashew.",

        "Why did the banana go to the hospital?",
        "Because it wasn't peeling well.",

        "What kind of snack do you have during a scary movie?",
        "Ice cream (I scream).",

        "How did the egg get up the mountain?",
        "It scrambled up.",

        "Why was the math book sad?",
        "It had too many problems.",

        "What did the ocean say when it saw the storm coming?",
        "Nothing, it just waved.",

        "Why couldn't cavemen send cards?",
        "The stamps kept falling off the rocks.",

        "How do we know Saturn was married more than once?",
        "Because she's got a lot of rings!",

        "What do you do if you see a spaceman?",
        "Park your car, man.",

        "What's an astronaut's favorite candy bar?",
        "A Mars bar.",

        "What did the volcano say to his wife?",
        "I lava you so much.",

        "What do you call an old snowman?",
        "Water.",

        "Why is 6 afraid of 7?",
        "Because 7, 8, 9.",

        "How do you know when the moon has had enough to eat?",
        "When it's full.",

        "What is a robot's favorite snack?",
        "Computer chips.",

        "Why is it so windy inside a sports arena?",
        "All those fans.",

        "What kind of witch likes the beach?",
        "A SAND-witch.",

        "When is a baseball player like a spider?",
        "When he catches a fly.",

        "How do you cut the sea in half?",
        "With a see-saw.",

        "Why did the boy eat his homework?",
        "His teacher told him it was a piece of cake!",

        "Where do pirates like to eat?",
        "Arrrrby's.",

        "What do you call cheese that's not yours?",
        "Nacho cheese.",

        "How do trees get on the internet?",
        "They log in.",

        "How do billboards talk?",
        "Sign language.",

        "What's brown and sticky?",
        "A stick.",

        "What letters are not in the alphabet?",
        "The ones in the mail.",

        "Why do fish live in salt water?",
        "Because pepper makes them sneeze.",

        "What has three letters and starts with gas?",
        "A car.",

        "What did the blanket say to the bed?",
        "I've got you covered.",

        "Why are Teddy Bears never hungry?",
        "Because they're always stuffed.",

        "Who did Frankenstein's monster bring to prom?",
        "His goulfriend.",

        "What do you get when you cross a cow with a trampoline?",
        "A milkshake.",

        "What kind of money do mermaids use?",
        "Sand dollars.",

        "What gets wetter the more it dries?",
        "A towel.",

        "What is a pirate's favorite letter?",
        "ARRRRRRRR.",

        "Why couldn't the sailor learn his alphabet?",
        "Because he always got lost at C.",

        "What are the only kind of trees that grow fingers?",
        "Palm trees.",

        "Why did the boy bring a ladder to school?",
        "He wanted to go to high school.",

        "What kind of shoes do ninjas wear?",
        "Sneakers!",

        "The bigger I am, the less you see. What is it?",
        "Darkness",

        "What has six faces and 21 eyes?",
        "A single dice.",

        "Where do zombies go swimming?",
        "The Dead Sea.",

        "Why was the rope stressed out?",
        "It was all tied in knots.",

        "What is a baby's motto?",
        "If at first you don't succeed, cry, cry again.",

        "What has teeth but cannot eat?",
        "A comb.",

        "What do you fill with empty hands?",
        "A pair of gloves.",

        "What do bats do at night?",
        "Aerobatics!",

        "What has a head, a tail, but has no legs?",
        "A penny.",

        "What helps you get to room 262?",
        "An elevator.",

        "What goes round and round but never moves?",
        "A washing machine.",

        "Where do old bowling balls end up?",
        "In the gutter.",

        "What is always a pain and keeps out the rain?",
        "A Window.",

        "What has a million stories but can't tell any?",
        "A library.",

        "What do ducks watch on TV?",
        "Duckumentaries",

        "What is cute, little, white and have dimples all over?",
        "A golf ball.",

        "What has four eyes and runs south?",
        "The Mississippi River.",

        "What gets broken without being held?",
        "A promise.",

        "What did the tree wear to the pool?",
        "It's trunks.",

        "What shines when it lives, but dies when it touches water?",
        "A candle.",

        "What has a head or tail, but not both?",
        "A coin.",

        "What can you feel, but not see?",
        "The wind.",

        "What has two legs but cannot walk?",
        "A pair of pants.",

        "Why did the math book look so sad?",
        "It had way too many problems.",

        "Why was the computer cold?",
        "Somebody left it's Windows open.",

        "Why did the tomato turn red?",
        "It saw the salad dressing.",

        "Why don't scientists trust atoms?",
        "They make up everything.",

        "Why don't crabs give to charity?",
        "They're shellfish.",

        "Why couldn't the bicycle stand up by itself?",
        "It was two-tired.",

        "Why did the chicken cross the playground?",
        "To get to the other slide.",

        "Why did the movie star burn his tongue?",
        "He drank his coffee before it was cool.",

        "Why did the fish blush?",
        "It saw the ocean's bottom.",

        "Why don't trees use social media?",
        "They prefer to branch out in person.",

        "Why did the belt go to jail?",
        "It held up a pair of pants.",

        "Why did the moon break up with the sun?",
        "It needed space.",

        "Why did the pencil break up with the pen?",
        "They were not on the same page.",

        "Why did the scientist clean his glasses?",
        "He wanted to see things more clearly.",

        "Why did the lion lose at poker?",
        "It was playing with a cheetah.",

        "Why did the banana go to the doctor?",
        "It wasn't peeling well.",

        "Why did the skydiver break up with his wife?",
        "She was too grounded.",

        "Why do cows wear bells?",
        "Their horns don't work.",

        "Why was the scientist always calm?",
        "He was in his element.",

        "Why did the football coach go to the bank?",
        "To get his quarterback.",

        "Why was the spoon always tired?",
        "He was always stirring up trouble.",

        "Why do fish live in saltwater?",
        "Pepper water would make them sneeze.",

        "Why did the golfer wear two pairs of pants?",
        "In case he got a hole in one.",

        "Why did the cat wear a fancy dress?",
        "She was feline good about itself.",

        "Why did the tree go to the dentist?",
        "To get a root canal.",

        "Why did the chicken cross the road twice?",
        "To prove it wasn't a chicken!",

        "Why did the grape stop in the middle of the road?",
        "It ran out of juice.",

        "Why did the teacher wear sunglasses to class?",
        "Her students were too bright.",

        "What did the cookie say to the doctor?",
        "I feel crummy.",

        "Why did the banker leave his job?",
        "He lost interest.",

        "Why was the computer cold?",
        "It had a virus.",

        "Why did the mermaid wear seashells?",
        "She outgrew her sea-cups.",

        "Why did the toilet paper roll down the hill?",
        "To get to the bottom.",

        "Why did the astronaut break up with his girlfriend?",
        "He needed space.",

        "Why did the comedian become a magician?",
        "He knew how to pull jokes out of a hat.",

        "Why did the electrician only work at night?",
        "He liked to see sparks fly.",

        "Why did the DJ go to the doctor?",
        "He had too many sick beats.",

        "Why did the farmer win an award?",
        "He was outstanding in his field.",

        "Why was the restaurant chef always late?",
        "He ran out of thyme.",

        "What did the grape say when it got stepped on?",
        "Nothing, it just let out a little wine.",

        "Why are ghosts bad at lying?",
        "Because you can see right through them.",

        "Why do bees hum?",
        "Because they don't know the words.",

        "Why did Mickey Mouse go to Outer Space?",
        "He wanted to visit Pluto.",

        "What do you call a fairy that hasn't taken a bath?",
        "Stinker Bell.",

        "What did the beach say when the tide came in?",
        "Long time, no sea.",

        "What did the baseball glove say to the ball?",
        "Catch you later.",

        "You will buy me to eat but never eat me. What am I?",
        "A plate.",

        "What do you call it when your parachute doesn't open?",
        "Jumping to a conclusion.",

        "You can you serve it, but never eat it? What is it?",
        "A tennis ball.",

        "How do oceans say hello to each other?",
        "They wave!",

        "What can you catch but not throw?",
        "Cold.",

        "Which letter of the alphabet has the most water?",
        "The C.",

        "What goes up and down but never moves?",
        "The temperature.",

        "What superhero is terrible at their job because they always get lost and are late?",
        "\"Wander\" Woman.",

        "What starts with a P, ends with an E and has thousands of letters?",
        "Post office.",

        "What has hands but can't clap?",
        "A clock.",

        "How is Europe like a frying pan?",
        "Because it has Greece at the bottom.",

        "I give milk and I have a horn, but I'm not a cow. What am I?",
        "A milk truck.",

        "What kind of money do vampires use?",
        "Bloodmoney.",

        "What has four legs but can't walk?",
        "A table.",

        "I scream, you scream, we all scream. For what?",
        "Ice cream!",

        "What kind of tree can you carry in your hand?",
        "A palm.",

        "What do you get when you cross a snowman and a vampire?",
        "Frostbite.",

        "What time did the tooth fairy show up to get a kid's tooth and leave a dollar under the pillow?",
        "Exactly TWOoth o' clock.",

        "What can run but can't walk?",
        "A drop of water.",

        "What's full of holes but still holds water?",
        "A sponge.",

        "What has one eye but can't see?",
        "A needle.",

        "Why do birds fly south for the winter?",
        "It's too far to walk.",

        "What two keys can't open any door?",
        "A monkey and a donkey.",

        "Why couldn't Goldilocks sleep?",
        "Because of night-bears.",

        "Why did the pony cough?",
        "He was a little horse.",

        "When is a man like a snake?",
        "When he's rattled.",

        "What kind of music do rabbits like?",
        "Hip Hop.",

        "How did the chimp fix the leaky faucet?",
        "With a Monkey Wrench.",

        "What did the turkey say to the rooster when he challenged him to a fight?",
        "Are you a chicken?" );

    $count = 207;

    function FisherYatesIndex($n) {

        # Create array of n elements containing indexes.
        $arr = [];

        for ($i = 0; $i < $n; $i++)
            $arr[$i] = $i;

        # Perform index shuffle.    
        for($i = $n - 1; $i > 0; $i--) {
            $r = rand(0, $i); $tmp = $arr[$i];
            $arr[$i] = $arr[$r];
            $arr[$r] = $tmp; }

        return $arr; }

    # Recall prior variable state
    $id = $_SESSION['id'];                  # App name.

    # Prevent data corruption to next application.
    if ($id == "jokes") {
        $lastCmd = $_SESSION['cmd'];        # User command.
        $mode = $_SESSION['mode'] + 0;      # Current mode.
        $ndx = $_SESSION['ndx'] + 0;        # Current index.
        $rndNdx = $_SESSION['rndNdx'];      # Random index.
        $update = $_SESSION['update'];      # Time from prior page update.

        } else {
        $mode = 0;
        $ndx = 0; 
        $rndNdx = FisherYatesIndex($count); 
        $update = 0; }

    # Get SoftKey selection.
    $cmd = $_GET['key'] ?? 0;

    # Check page refresh delay.
    if (time() - $update < $delay)

        # Process user request based on the key pressed.	
        switch($cmd) {

        case 1 : # mode
            $mode = ++$mode % 2;
            break;

        case 2 : # previous
            $ndx = (--$ndx + $count) % $count;
            $mode = 0;
            break;

        case 3 : # next
            $ndx = ++$ndx % $count;
            $mode = 0;
            break;
        }

    else {
        # Advance to next item after displaying answer.
        $ndx = ++$ndx % $count;
        $mode = 0; }

    # Update the indexes on both fields.
    $i = $rndNdx[$ndx] * 2;
    $j = $i + 1;

    switch($mode) {

    case 0 : # Question
        echo "<CiscoIPPhoneText>\n";
        echo "  <Title>Kids Jokes - Question</Title>\n";
        echo "  <Text>$joke[$i]</Text>\n";

        $label = "Answer";
        $msg = "";
        break;

    case 1 : # Answer
        echo "<CiscoIPPhoneText>\n";
        echo "  <Title>Kids Jokes - Answer</Title>\n";
        echo "  <Text>$joke[$i]\n$joke[$j]</Text>\n";

        $label = "Back";
        $msg = "";
        break;
    }

    echo "  <SoftKeyItem>\n";
    echo "    <Name>$label</Name>\n";
    echo "    <URL>$urlPath?key=1</URL>\n";
    echo "    <Position>1</Position>\n";
    echo "  </SoftKeyItem>\n";

    echo "  <SoftKeyItem>\n";
    echo "    <Name>Prev</Name>\n";
    echo "    <URL>$urlPath?key=2</URL>\n";
    echo "    <Position>2</Position>\n";
    echo "  </SoftKeyItem>\n";

    echo "  <SoftKeyItem>\n";
    echo "    <Name>Next</Name>\n";
    echo "    <URL>$urlPath?key=3</URL>\n";
    echo "    <Position>3</Position>\n";
    echo "  </SoftKeyItem>\n";

    echo "  <SoftKeyItem>\n";
    echo "    <Name>Exit</Name>\n";
    echo "    <URL>SoftKey:Exit</URL>\n";
    echo "    <Position>4</Position>\n";
    echo "  </SoftKeyItem>\n";

    echo "  <Prompt>$msg</Prompt>\n";
    echo "</CiscoIPPhoneText>";

    # Save current variable state.
    $_SESSION['id'] = "jokes";
    $_SESSION['cmd'] = $cmd;
    $_SESSION['mode'] = $mode;
    $_SESSION['ndx'] = $ndx;
    $_SESSION['rndNdx'] = $rndNdx;
    $_SESSION['update'] = time();
?>
