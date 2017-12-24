@extends('layouts.main')

@section('content')
@include('modules.sidebar')
<div class="action-bar top">
    <div class="buttons">
        <a href="#" class="button icon-button post-icon" title="Post a new topic">New Topic</a>
    </div>
    <div class="pagination">
        {{ count($topics) }} topic • Page <strong>1</strong> of <strong>1</strong>
    </div>
</div>
@forelse($topics as $topic)
<div class="forabg">
    <div class="inner">
        <ul class="topiclist">
            <li class="header">
                <dl class="icon">
                    <dt><div class="list-inner"><a href="./viewforum.php?style=10&amp;f=1">Main</a></div></dt>
                    <dd class="topics">Topics</dd>
                    <dd class="posts">Posts</dd>
                    <dd class="lastpost"><span>Last post</span></dd>
                </dl>
            </li>
        </ul>
        <ul class="topiclist forums">
            <li class="row">
                <dl class="icon forum_read">
                    <dt title="No unread posts">
                        <div class="list-inner">
                            <a href="./viewforum.php?style=10&amp;f=2" class="forumtitle">Informations</a>
                            <br />Everything you should know.
                            <div class="responsive-show" style="display: none;">
                                Topics: <strong>2</strong>
                            </div>
                        </div>
                    </dt>
                    <dd class="topics">2 <dfn>Topics</dfn></dd>
                    <dd class="posts">2 <dfn>Posts</dfn></dd>
                    <dd class="lastpost">
                        <span>
                            <dfn>Last post</dfn>
                            <a href="./viewtopic.php?style=10&amp;f=2&amp;p=2#p2" title="Welcome" class="lastsubject">Welcome</a> <br />
                            by <a href="./memberlist.php?style=10&amp;mode=viewprofile&amp;u=2" style="color: #AA0000;" class="username-coloured">Gramziu</a>
                            <a href="./viewtopic.php?style=10&amp;f=2&amp;p=2#p2"><span class="imageset icon_topic_latest" title="View the latest post">View the latest post</span></a> <br />24 Feb 2015, 21:50
                        </span>
                    </dd>
                </dl>
            </li>
            <li class="row">
                <dl class="icon forum_read_locked">
                    <dt title="Forum locked">
                        <div class="list-inner">
                            <a href="./viewforum.php?style=10&amp;f=3" class="forumtitle">General examples</a>
                            <br />Examples of topics, you can see here how everything works.
                            <div class="responsive-show" style="display: none;">
                                Topics: <strong>6</strong>
                            </div>
                        </div>
                    </dt>
                    <dd class="topics">6 <dfn>Topics</dfn></dd>
                    <dd class="posts">45 <dfn>Posts</dfn></dd>
                    <dd class="lastpost">
                        <span>
                            <dfn>Last post</dfn>
                            <a href="./viewtopic.php?style=10&amp;f=3&amp;p=69#p69" title="Re: Popular topic" class="lastsubject">Re: Popular topic</a> <br />
                            by <a href="./memberlist.php?style=10&amp;mode=viewprofile&amp;u=50" style="color: #00AA00;" class="username-coloured">Ramziu</a>
                            <a href="./viewtopic.php?style=10&amp;f=3&amp;p=69#p69"><span class="imageset icon_topic_latest" title="View the latest post">View the latest post</span></a> <br />07 Dec 2015, 20:03
                        </span>
                    </dd>
                </dl>
            </li>
            <li class="row">
                <dl class="icon forum_link">
                    <dt title="No unread posts">
                        <div class="list-inner">
                            <a href="./viewforum.php?style=10&amp;f=5" class="forumtitle">Gramziu themes on ThemeForest</a>
                            <br />You can find Gramziu themes only on ThemeForest.
                            <div class="responsive-show" style="display: none;">
                                Total redirects: <strong>32418</strong>
                            </div>
                        </div>
                    </dt>
                    <dd class="redirect"><span>Total redirects: 32418</span></dd>
                </dl>
            </li>
        </ul>
    </div>
</div>
<div class="forabg">
    <div class="inner">
        <ul class="topiclist">
            <li class="header">
                <dl class="icon">
                    <dt><div class="list-inner"><a href="./viewforum.php?style=10&amp;f=6">Themes</a></div></dt>
                    <dd class="topics">Topics</dd>
                    <dd class="posts">Posts</dd>
                    <dd class="lastpost"><span>Last post</span></dd>
                </dl>
            </li>
        </ul>
        <ul class="topiclist forums">
            <li class="row">
                <dl class="icon forum_read">
                    <dt title="No unread posts">
                        <div class="list-inner">
                            <a href="./viewforum.php?style=10&amp;f=7" class="forumtitle">Hawiki</a>
                            <br />Simple phpBB theme.
                            <div class="responsive-show" style="display: none;">
                                Topics: <strong>1</strong>
                            </div>
                        </div>
                    </dt>
                    <dd class="topics">1 <dfn>Topics</dfn></dd>
                    <dd class="posts">2 <dfn>Posts</dfn></dd>
                    <dd class="lastpost"><span>
                        <dfn>Last post</dfn>
                        <a href="./viewtopic.php?style=10&amp;f=7&amp;p=70#p70" title="Re: Sample" class="lastsubject">Re: Sample</a> <br />
                        by <a href="./memberlist.php?style=10&amp;mode=viewprofile&amp;u=51" class="username">Zamziu</a>
                        <a href="./viewtopic.php?style=10&amp;f=7&amp;p=70#p70"><span class="imageset icon_topic_latest" title="View the latest post">View the latest post</span></a> <br />07 Dec 2015, 20:20</span>
                    </dd>
                </dl>
            </li>
            <li class="row">
                <dl class="icon forum_read">
                    <dt title="No unread posts">
                        <div class="list-inner">
                            <a href="./viewforum.php?style=10&amp;f=8" class="forumtitle">Ariki</a>
                            <br />Colourful phpBB theme.
                            <div class="responsive-show" style="display: none;">
                                Topics: <strong>1</strong>
                            </div>
                        </div>
                    </dt>
                    <dd class="topics">1 <dfn>Topics</dfn></dd>
                    <dd class="posts">2 <dfn>Posts</dfn></dd>
                    <dd class="lastpost">
                        <span>
                            <dfn>Last post</dfn>
                            <a href="./viewtopic.php?style=10&amp;f=8&amp;p=71#p71" title="Re: Example" class="lastsubject">Re: Example</a> <br />
                            by <a href="./memberlist.php?style=10&amp;mode=viewprofile&amp;u=52" class="username">Tamziu</a>
                            <a href="./viewtopic.php?style=10&amp;f=8&amp;p=71#p71"><span class="imageset icon_topic_latest" title="View the latest post">View the latest post</span></a> <br />07 Dec 2015, 20:36
                        </span>
                    </dd>
                </dl>
            </li>
            <li class="row">
                <dl class="icon forum_read">
                    <dt title="No unread posts">
                        <div class="list-inner">
                            <a href="./viewforum.php?style=10&amp;f=9" class="forumtitle">Anami</a>
                            <br />Clear phpBB theme.
                            <div class="responsive-show" style="display: none;">
                                Topics: <strong>1</strong>
                            </div>
                        </div>
                    </dt>
                    <dd class="topics">1 <dfn>Topics</dfn></dd>
                    <dd class="posts">2 <dfn>Posts</dfn></dd>
                    <dd class="lastpost">
                        <span>
                            <dfn>Last post</dfn>
                            <a href="./viewtopic.php?style=10&amp;f=9&amp;p=72#p72" title="Re: Lorem ipsum" class="lastsubject">Re: Lorem ipsum</a> <br />
                            by <a href="./memberlist.php?style=10&amp;mode=viewprofile&amp;u=53" class="username">Xamziu</a>
                            <a href="./viewtopic.php?style=10&amp;f=9&amp;p=72#p72"><span class="imageset icon_topic_latest" title="View the latest post">View the latest post</span></a> <br />07 Dec 2015, 20:40
                        </span>
                    </dd>
                </dl>
            </li>
        </ul>
    </div>
</div>
<div class="forabg">
    <div class="inner">
        <ul class="topiclist">
            <li class="header">
                <dl class="icon">
                    <dt><div class="list-inner"><a href="./viewforum.php?style=10&amp;f=10">Examples</a></div></dt>
                    <dd class="topics">Topics</dd>
                    <dd class="posts">Posts</dd>
                    <dd class="lastpost"><span>Last post</span></dd>
                </dl>
            </li>
        </ul>
        <ul class="topiclist forums">
            <li class="row">
                <dl class="icon forum_read">
                    <dt title="No unread posts">
                        <div class="list-inner">
                            <a href="./viewforum.php?style=10&amp;f=11" class="forumtitle">Forum with long description</a>
                            <br />Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            <div class="responsive-show" style="display: none;">
                                Topics: <strong>1</strong>
                            </div>
                        </div>
                    </dt>
                    <dd class="topics">1 <dfn>Topics</dfn></dd>
                    <dd class="posts">2 <dfn>Posts</dfn></dd>
                    <dd class="lastpost">
                        <span>
                            <dfn>Last post</dfn>
                            <a href="./viewtopic.php?style=10&amp;f=11&amp;p=77#p77" title="Re: Good topic" class="lastsubject">Re: Good topic</a> <br />
                            by <a href="./memberlist.php?style=10&amp;mode=viewprofile&amp;u=56" class="username">Kamziu</a>
                            <a href="./viewtopic.php?style=10&amp;f=11&amp;p=77#p77"><span class="imageset icon_topic_latest" title="View the latest post">View the latest post</span></a> <br />07 Dec 2015, 21:06
                        </span>
                    </dd>
                </dl>
            </li>
            <li class="row">
                <dl class="icon forum_read_subforum">
                    <dt title="No unread posts">
                        <div class="list-inner">
                            <a href="./viewforum.php?style=10&amp;f=12" class="forumtitle">Forum with long description and subforums</a>
                            <br />Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.                                                                                                       <br /><strong>Subforums:</strong>
                            <a href="./viewforum.php?style=10&amp;f=13" class="subforum read" title="No unread posts">First subforum</a>,                                                           <a href="./viewforum.php?style=10&amp;f=14" class="subforum read" title="No unread posts">Second subforum</a>
                            <div class="responsive-show" style="display: none;">
                                Topics: <strong>1</strong>
                            </div>
                        </div>
                    </dt>
                    <dd class="topics">1 <dfn>Topics</dfn></dd>
                    <dd class="posts">2 <dfn>Posts</dfn></dd>
                    <dd class="lastpost">
                        <span>
                            <dfn>Last post</dfn>
                            <a href="./viewtopic.php?style=10&amp;f=12&amp;p=73#p73" title="Re: Another example" class="lastsubject">Re: Another example</a> <br />
                            by <a href="./memberlist.php?style=10&amp;mode=viewprofile&amp;u=54" class="username">Famziu</a>
                            <a href="./viewtopic.php?style=10&amp;f=12&amp;p=73#p73"><span class="imageset icon_topic_latest" title="View the latest post">View the latest post</span></a> <br />07 Dec 2015, 20:42
                        </span>
                    </dd>
                </dl>
            </li>
            <li class="row">
                <dl class="icon forum_read_locked">
                    <dt title="Forum locked">
                        <div class="list-inner">
                            <a href="./viewforum.php?style=10&amp;f=16" class="forumtitle">Locked forum with short description</a>
                            <br />Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            <div class="responsive-show" style="display: none;">
                                Topics: <strong>1</strong>
                            </div>
                        </div>
                    </dt>
                    <dd class="topics">1 <dfn>Topics</dfn></dd>
                    <dd class="posts">2 <dfn>Posts</dfn></dd>
                    <dd class="lastpost">
                        <span>
                            <dfn>Last post</dfn>
                            <a href="./viewtopic.php?style=10&amp;f=16&amp;p=75#p75" title="Re: Next lorem ipsum text" class="lastsubject">Re: Next lorem ipsum text</a> <br />
                            by <a href="./memberlist.php?style=10&amp;mode=viewprofile&amp;u=50" style="color: #00AA00;" class="username-coloured">Ramziu</a>
                            <a href="./viewtopic.php?style=10&amp;f=16&amp;p=75#p75"><span class="imageset icon_topic_latest" title="View the latest post">View the latest post</span></a> <br />07 Dec 2015, 20:55
                        </span>
                    </dd>
                </dl>
            </li>
            <li class="row">
                <dl class="icon forum_read_locked">
                    <dt title="Forum locked">
                        <div class="list-inner">
                            <a href="./viewforum.php?style=10&amp;f=17" class="forumtitle">Locked forum with short description and moderator</a>
                            <br />Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.                                                   <br /><strong>Moderator:</strong> <a href="./memberlist.php?style=10&amp;mode=viewprofile&amp;u=2" style="color: #AA0000;" class="username-coloured">Gramziu</a>
                            <div class="responsive-show" style="display: none;">
                                Topics: <strong>1</strong>
                            </div>
                        </div>
                    </dt>
                    <dd class="topics">1 <dfn>Topics</dfn></dd>
                    <dd class="posts">2 <dfn>Posts</dfn></dd>
                    <dd class="lastpost">
                        <span>
                            <dfn>Last post</dfn>
                            <a href="./viewtopic.php?style=10&amp;f=17&amp;p=76#p76" title="Re: Hello!" class="lastsubject">Re: Hello!</a> <br />
                            by <a href="./memberlist.php?style=10&amp;mode=viewprofile&amp;u=55" style="color: #00AA00;" class="username-coloured">Tramziu</a>
                            <a href="./viewtopic.php?style=10&amp;f=17&amp;p=76#p76"><span class="imageset icon_topic_latest" title="View the latest post">View the latest post</span></a> <br />07 Dec 2015, 21:01
                        </span>
                    </dd>
                </dl>
            </li>
        </ul>
    </div>
</div>
@empty
<h4>We have nothing to show yet. Be the first one to create a topic and get this rolling!</h4>
@endforelse
@include('modules.footer-stats')
@endsection