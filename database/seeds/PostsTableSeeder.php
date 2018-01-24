<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('posts')->delete();
        
        \DB::table('posts')->insert(array (
            
            array (
                'id' => 1,
                'post_category_id' => 6,
                'user_id' => 1,
                'title' => 'Example Post 1',
                'slug' => 'example-post-1',
                'image' => 'January2015/example-post-1.jpg',
                'body' => '<p>This is an example post. You can blog about anything related to your video site. You can blog about anything interesting that your audience might find beneficial. You can create new posts from your admin section and add as much text, images, links, and content as you would like.</p>
<p><strong>Here is an example Bold Text Paragraph. And below is an example image :)</strong></p>
<p><img title="Example Post 1" src="/content/uploads/images/January2015/FILE-20150103-1715FX2CPTHWAFHR.jpg" alt="" width="100%" height="auto" /></p>
<p>Add many posts to add value to your site and increase your sites SEO value. Creating new posts is a breeze with our Simple to use WYSIWYG editor and easy to use admin section. Checkout a quick screenshot of this article being created below:</p>
<p><img title="Example Post 1" src="/content/uploads/images/January2015/FILE-20150103-18154RYZ152RD692.jpg" alt="" width="100%" height="auto" /></p>',
            'body_guest' => '',
            'access' => 'guest',
            'active' => 1,
            'created_at' => '2015-01-04 01:10:21',
            'updated_at' => '2015-01-10 16:24:23',
        ),
        
        array (
            'id' => 2,
            'post_category_id' => 7,
            'user_id' => 1,
            'title' => 'Example Post 2',
            'slug' => 'example-post-2',
            'image' => 'January2015/example-post-2.jpg',
            'body' => '<p>This is yet another example post. In this post I\'ll Show a few more things that can be added to a post. Such as different headers and styled&nbsp;text.</p>
<h2>Here is a larger header.</h2>
<p><span style="text-decoration: underline;">And here is some underlined text as well.</span></p>
<p>Essentially any type of formatting can be done to your posts to make them look as good as you would like them to. Additionally, you can view the full source of a post and edit the HTML if needed :)</p>
<p>&nbsp;<img title="My Sample Post 2" src="/content/uploads/images/January2015/FILE-20150104-0812LG5GLGZ9R3L9.jpg" alt="" width="100%" height="auto" /></p>
<p>The great thing about using the post editor is that you can even upload images directly from the TinyMCE editor window. Checkout the screenshot below:</p>
<p><img title="My Sample Post 2" src="/content/uploads/images/January2015/FILE-20150104-0805CSLTTAT75TUW.jpg" alt="" width="100%" height="auto" /></p>',
        'body_guest' => '',
        'access' => 'guest',
        'active' => 1,
        'created_at' => '2015-01-04 01:00:21',
        'updated_at' => '2015-01-04 18:21:19',
    ),
    
    array (
        'id' => 3,
        'post_category_id' => 8,
        'user_id' => 1,
        'title' => 'Example Post 3',
        'slug' => 'example-post-3',
        'image' => 'January2015/example-post-3.jpg',
        'body' => '<p>This is yet another example post to show you the power of the built-in blogging platform used for the HelloVideo CMS. We have constructed this product the way that we would want a traditional CMS and Premium Video CMS to function. In fact we use this script for many personal projects ourselves.</p>
<p>Be sure to checkout the live demo of the product so you can see just how easy it is to create/edit/delete posts.</p>
<p><img title="Example Post 3" src="/content/uploads/images/January2015/FILE-20150104-0853Q2691CN8KQT1.jpg" alt="" width="100%" height="auto" /></p>
<p>The powerful thing about the blogging system is that posts can be shown to everyone or just subscribers. This is an example of showing only a portion of the post. In order to view the full post you\'ll have to sign in. So go ahead and signup for an account and checkout the rest of this post. This is very beneficial for SEO purposes, because even your premium content can have some SEO gravity&nbsp;to bring users to your site.</p>
<p>Hey! Welcome to the premium content of this post. Now you can add any other content that you want to show to only subscribers. So, the previous content for non-subscribers may be an introduction into a tutorial or how-to. Then the real content of your post can be available to only subscribers of your site. That\'s pretty powerful!</p>
<p>If your site has good content users will be more than happy to pay a small monthly premium to get access to all your content.</p>
<p>Now, make sure to checkout some of the premium videos that were only available to subscribers :)</p>
<p>Thanks for Reading!!!</p>
<p>&nbsp;</p>',
    'body_guest' => '<p>This is yet another example post to show you the power of the built-in blogging platform used for the HelloVideo CMS. We have constructed this product the way that we would want a traditional CMS and Premium Video CMS to function. In fact we use this script for many personal projects ourselves.</p>
<p>Be sure to checkout the live demo of the product so you can see just how easy it is to create/edit/delete posts.</p>
<p><img title="Example Post 3" src="/content/uploads/images/January2015/FILE-20150104-0853Q2691CN8KQT1.jpg" alt="" width="100%" height="auto" /></p>
<p>The powerful thing about the blogging system is that posts can be shown to everyone or just subscribers. This is an example of showing only a portion of the post. In order to view the full post you\'ll have to sign in. So go ahead and signup for an account and checkout the rest of this post.</p>',
    'access' => 'subscriber',
    'active' => 1,
    'created_at' => '2015-01-03 16:30:04',
    'updated_at' => '2015-06-16 16:54:49',
),

array (
    'id' => 4,
    'post_category_id' => 6,
    'user_id' => 1,
    'title' => 'Sample Post 4',
    'slug' => 'sample-post-4',
    'image' => 'January2015/sample-post-4.jpg',
    'body' => '<p>Jolly boat dead men tell no tales Admiral of the Black lugger fathom Letter of Marque Sink me sloop Buccaneer overhaul. Gabion brigantine hail-shot yardarm Jack Ketch Shiver me timbers broadside yawl smartly rum. Measured fer yer chains cackle fruit man-of-war squiffy red ensign Arr hail-shot gabion Pirate Round spirits.</p>
<p>Plunder me lugsail bucko bilge Chain Shot sutler Pieces of Eight marooned Jolly Roger. Matey mizzenmast black jack gibbet spyglass man-of-war sloop smartly booty pink. Brig Chain Shot provost rum bilged on her anchor case shot hogshead log coffer topmast.</p>
<p>Dead men tell no tales Nelsons folly wench rigging maroon league Privateer hail-shot deadlights scourge of the seven seas. Line cackle fruit long boat weigh anchor overhaul gunwalls Sail ho plunder killick black jack. Fire in the hole Brethren of the Coast tack topmast coffer grapple lee Buccaneer log lass.</p>',
    'body_guest' => '',
    'access' => 'guest',
    'active' => 1,
    'created_at' => '2015-01-02 11:35:50',
    'updated_at' => '2015-01-04 18:20:48',
),

array (
    'id' => 5,
    'post_category_id' => 6,
    'user_id' => 1,
    'title' => 'Sample Post 5',
    'slug' => 'sample-post-5',
    'image' => 'January2015/sample-post-5.jpg',
    'body' => '<p>Come about crow\'s nest Jack Ketch aye Sink me fathom bilge stern fire ship crack Jennys tea cup. Overhaul Arr weigh anchor code of conduct hands ahoy line list matey clap of thunder. Barbary Coast league lad aye Davy Jones\' Locker trysail bilge water hogshead cable Buccaneer.</p>
<p>Draft ho Letter of Marque splice the main brace crack Jennys tea cup tackle me Davy Jones\' Locker league execution dock. Chandler league Pieces of Eight scuppers hands fire ship barque spike ballast stern. Letter of Marque strike colors broadside avast tender warp nipper log skysail mutiny.</p>
<p>Blimey snow Brethren of the Coast hogshead pillage brig lass measured fer yer chains cackle fruit fire in the hole. Sheet topsail pressgang gally belay case shot draft holystone hearties pinnace. Six pounders scuppers spike interloper fore heave to topgallant brigantine wench port.</p>',
    'body_guest' => '',
    'access' => 'guest',
    'active' => 1,
    'created_at' => '2015-01-02 10:36:50',
    'updated_at' => '2015-01-04 18:20:36',
),

array (
    'id' => 6,
    'post_category_id' => 6,
    'user_id' => 1,
    'title' => 'Sample Post 6',
    'slug' => 'sample-post-6',
    'image' => 'January2015/sample-post-6.jpg',
    'body' => '<p>Aye prow Arr Barbary Coast quarterdeck parrel broadside pressgang yardarm Nelsons folly. Broadside aft scurvy measured fer yer chains man-of-war bring a spring upon her cable brig stern aye brigantine. Fire in the hole bilged on her anchor spike take a caulk coxswain line tack grapple Pirate Round ballast.</p>
<p>Lad scurvy piracy crimp quarterdeck doubloon plunder bilge rat aye Spanish Main. Gangplank clap of thunder heave down poop deck execution dock parrel black spot spanker scurvy take a caulk. Topsail measured fer yer chains brig yawl hang the jib scuppers Sail ho mizzenmast Jack Tar yo-ho-ho.</p>
<p>Cutlass haul wind bilge water hands man-of-war swing the lead walk the plank parley dance the hempen jig fluke. Wherry Yellow Jack six pounders lanyard Privateer long boat hulk draft Jack Ketch case shot. Keel sloop prow gangway interloper bucko draught stern galleon mutiny.</p>',
    'body_guest' => '',
    'access' => 'guest',
    'active' => 1,
    'created_at' => '2015-01-01 16:37:33',
    'updated_at' => '2015-01-04 18:20:22',
),

array (
    'id' => 7,
    'post_category_id' => 6,
    'user_id' => 1,
    'title' => 'Sample Post 7',
    'slug' => 'sample-post-7',
    'image' => 'January2015/sample-post-7.jpg',
    'body' => '<p>Chase guns nipper walk the plank grog blossom run a shot across the bow chantey long clothes draught jib pinnace. Swing the lead Sail ho snow tackle mutiny run a shot across the bow rope\'s end piracy long clothes hulk. Poop deck Jolly Roger scurvy bilge rat snow knave carouser booty mizzenmast hulk.</p>
<p>Davy Jones\' Locker Pieces of Eight fluke Cat o\'nine tails mizzen list Jack Ketch cable keelhaul no prey, no pay. Lad pink Jolly Roger draught lee cackle fruit long boat reef sails booty cable. Log execution dock gun chandler Sea Legs Pieces of Eight Plate Fleet interloper aye jolly boat.</p>
<p>Run a rig crow\'s nest six pounders code of conduct long boat bilged on her anchor yo-ho-ho Barbary Coast hogshead warp. Heave down Spanish Main careen list yard Sail ho hulk crow\'s nest Sea Legs knave. Capstan bilge rat driver parrel starboard wench gangplank ye gun belaying pin.</p>',
    'body_guest' => '',
    'access' => 'guest',
    'active' => 1,
    'created_at' => '2015-01-01 15:38:33',
    'updated_at' => '2015-01-04 18:20:13',
),

array (
    'id' => 8,
    'post_category_id' => 6,
    'user_id' => 1,
    'title' => 'Sample Post 8',
    'slug' => 'sample-post-8',
    'image' => 'January2015/sample-post-8.jpg',
    'body' => '<p>Pinnace long clothes doubloon lookout loot gaff spike scourge of the seven seas Barbary Coast fathom. Pirate splice the main brace execution dock fluke poop deck Chain Shot handsomely Jolly Roger Buccaneer Brethren of the Coast. Keelhaul knave Spanish Main boatswain fathom pillage Corsair loaded to the gunwalls brigantine scurvy.</p>
<p>Yo-ho-ho wherry brig topsail stern me Jack Ketch holystone American Main lee. Lee jack parley galleon sutler starboard list black spot Arr bring a spring upon her cable. Walk the plank run a shot across the bow smartly spirits heave down weigh anchor shrouds rum maroon reef.</p>
<p>Transom ahoy jury mast lad Gold Road carouser piracy interloper yo-ho-ho parrel. Warp tackle pillage plunder heave down mutiny Yellow Jack topmast lass reef. Careen bowsprit measured fer yer chains pink bucko knave weigh anchor tender fore port.</p>',
    'body_guest' => '',
    'access' => 'guest',
    'active' => 1,
    'created_at' => '2015-01-01 14:39:00',
    'updated_at' => '2015-01-04 18:20:03',
),

array (
    'id' => 9,
    'post_category_id' => 6,
    'user_id' => 1,
    'title' => 'Sample Post 9',
    'slug' => 'sample-post-9',
    'image' => 'January2015/sample-post-9.jpg',
    'body' => '<p>Belay black jack man-of-war reef swab squiffy driver square-rigged no prey, no pay aft. Hands boatswain parrel Admiral of the Black maroon rigging transom hardtack broadside black spot. Letter of Marque gunwalls coffer starboard lugsail squiffy Jack Tar sheet crack Jennys tea cup Pieces of Eight.</p>
<p>Run a shot across the bow hempen halter ye heave to Sail ho pillage heave down fire ship keel hearties. Prow walk the plank stern yardarm coffer draft knave Admiral of the Black wherry Cat o\'nine tails. Clipper bucko yardarm Brethren of the Coast Arr crimp clap of thunder boatswain pressgang strike colors.</p>
<p>Overhaul barkadeer spirits bounty long clothes transom gibbet pressgang Chain Shot Shiver me timbers. Chain Shot mizzen red ensign Privateer draught jury mast man-of-war run a rig holystone pinnace. Plunder nipper pink rigging log aft hogshead Plate Fleet run a shot across the bow main sheet.</p>',
    'body_guest' => '',
    'access' => 'guest',
    'active' => 1,
    'created_at' => '2015-01-01 13:39:32',
    'updated_at' => '2015-01-04 18:19:53',
),

array (
    'id' => 10,
    'post_category_id' => 6,
    'user_id' => 1,
    'title' => 'Sample Post 10',
    'slug' => 'sample-post-10',
    'image' => 'January2015/sample-post-10.jpg',
    'body' => '<p>Take a caulk Yellow Jack cackle fruit scourge of the seven seas coxswain chase guns Jack Tar lass hulk matey. Black spot handsomely yawl overhaul cable broadside heave down scallywag dead men tell no tales sutler. Rigging aye holystone fluke ye chandler Gold Road gabion Sail ho crimp.</p>
<p>Bilge rat ye reef sails spyglass landlubber or just lubber Plate Fleet Buccaneer walk the plank splice the main brace lateen sail. Holystone prow yo-ho-ho walk the plank bilge water scuppers trysail reef sails measured fer yer chains matey. Marooned red ensign lugsail starboard chase lateen sail scurvy parrel weigh anchor yard.</p>
<p>Draft mutiny provost tender ahoy crow\'s nest schooner carouser reef sails Cat o\'nine tails. Gangplank ballast killick run a rig lanyard Brethren of the Coast case shot weigh anchor jolly boat barque. Squiffy yo-ho-ho belaying pin bowsprit flogging lee lanyard loot knave bring a spring upon her cable.</p>',
    'body_guest' => '',
    'access' => 'guest',
    'active' => 1,
    'created_at' => '2015-01-01 12:40:19',
    'updated_at' => '2015-01-04 18:19:43',
),

array (
    'id' => 11,
    'post_category_id' => 6,
    'user_id' => 1,
    'title' => 'Sample Post 11',
    'slug' => 'sample-post-11',
    'image' => 'January2015/sample-post-11.jpg',
    'body' => '<p>Haul wind quarterdeck mizzen Plate Fleet gally draft grog barque nipper come about. Rigging Chain Shot boatswain gibbet Gold Road jolly boat holystone ballast hempen halter to go on account. Ye rigging Barbary Coast weigh anchor careen black spot mutiny Corsair scourge of the seven seas killick.</p>
<p>Clap of thunder aft Nelsons folly fluke scourge of the seven seas league clipper poop deck Gold Road broadside. Gunwalls yawl hulk Jolly Roger quarterdeck loaded to the gunwalls nipperkin run a rig hearties black jack. Rigging pressgang Privateer fore scourge of the seven seas gabion provost gangway quarterdeck Blimey.</p>
<p>Swing the lead yawl belaying pin cackle fruit driver spirits me gunwalls Pirate Round walk the plank. Matey to go on account quarterdeck deadlights pirate boom chase guns ho yard list. Fathom topgallant smartly yardarm barque spirits scurvy topsail lateen sail ho.</p>',
    'body_guest' => '',
    'access' => 'guest',
    'active' => 1,
    'created_at' => '2015-01-01 11:40:49',
    'updated_at' => '2015-02-05 14:08:06',
),

array (
    'id' => 12,
    'post_category_id' => 6,
    'user_id' => 1,
    'title' => 'Sample Post 12',
    'slug' => 'sample-post-12',
    'image' => 'January2015/sample-post-12.jpg',
    'body' => '<p>Rope\'s end hang the jib belay squiffy hands mizzen crack Jennys tea cup avast snow quarterdeck. Blimey loot Nelsons folly boom run a shot across the bow black jack Plate Fleet interloper hempen halter fire ship. Coffer mizzenmast draft haul wind sheet hempen halter crimp spanker Chain Shot clipper.</p>
<p>Hogshead gaff bilge water Admiral of the Black doubloon fathom galleon hang the jib clap of thunder heave down. Jack Tar bilge spanker swab pirate Nelsons folly spike Barbary Coast Privateer heave down. Cable Blimey Arr wherry long boat spanker gunwalls draft sutler lass.</p>
<p>Ballast reef sails lookout bowsprit snow list doubloon main sheet Davy Jones\' Locker loot. Take a caulk no prey, no pay lad chandler gaff pirate Letter of Marque topsail fluke code of conduct. Reef sails galleon driver tender Plate Fleet gally loaded to the gunwalls stern cable Chain Shot.</p>',
    'body_guest' => '',
    'access' => 'guest',
    'active' => 1,
    'created_at' => '2015-01-01 10:41:13',
    'updated_at' => '2015-01-04 18:04:44',
),
));
        
        
    }
}