@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header" style="text-align: center"><strong>Welcome to Speedrunner Rankings</strong></div>

                    <div class="card-body" style="text-align: center">
                        <p>This is a home page for a speedrunner rankings.</p>
                        <p>You can start recording your own speedruns or view the rankings.</p>
                        <p>Use the sidebar to navigate page!</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center mt-4">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header" style="text-align: center"><strong>What is Speedrunning?</strong></div>

                    <div class="card-body">
                        <h5>Definition</h5>
                        <p>Speedrunning refers to the activity of completing a video game or a specific segment of a game as quickly as possible. Speedrunners aim to achieve the fastest time by exploiting game mechanics, discovering glitches, and optimizing their gameplay.</p>

                        <h5>Key Concepts</h5>
                        <ul>
                            <li><strong>Any%</strong>: Completing the game as quickly as possible with no restrictions on how completion is achieved.</li>
                            <li><strong>100%</strong>: Completing the game fully, including all quests, collectibles, and secrets.</li>
                            <li><strong>Glitchless</strong>: Completing the game without using any glitches.</li>
                            <li><strong>Tool-Assisted Speedrun (TAS)</strong>: Speedruns performed with the help of tools like emulators and frame-by-frame analysis to achieve perfection.</li>
                        </ul>

                        <h5>History</h5>
                        <p>Speedrunning has a rich history that dates back to the early days of gaming. Here are some key milestones:</p>
                        <ul>
                            <li><strong>1980s</strong>: The roots of speedrunning can be traced back to the early days of arcade and console gaming, where high scores and quick completions were often recorded and shared among enthusiasts.</li>
                            <li><strong>1993</strong>: One of the earliest known speedruns is for "Doom." The game’s developers included a feature to record playthroughs, leading to the creation of the "Doom Honorific Titles" system.</li>
                            <li><strong>Late 1990s</strong>: The advent of the internet allowed speedrunners to share videos and strategies more easily, with websites like Speed Demos Archive becoming hubs for the community.</li>
                            <li><strong>Early 2000s</strong>: Games like "Super Metroid" and "The Legend of Zelda: Ocarina of Time" became popular choices for speedruns.</li>
                            <li><strong>2000s-2010s</strong>: Platforms like YouTube and Twitch revolutionized speedrunning, and events like "Awesome Games Done Quick" brought speedrunning into the mainstream.</li>
                            <li><strong>2020s</strong>: Speedrunning continues to grow, with new games, techniques, and a dedicated community.</li>
                        </ul>

                        <h5>Notable Games and Records</h5>
                        <ul>
                            <li><strong>Super Mario Bros. (NES)</strong>: Any% world record is under 4 minutes and 55 seconds.</li>
                            <li><strong>The Legend of Zelda: Ocarina of Time (N64)</strong>: Any% completed in under 17 minutes.</li>
                            <li><strong>Minecraft</strong>: Any% Random Seed completed in around 9 minutes.</li>
                        </ul>

                        <h5>Community and Culture</h5>
                        <p>The speedrunning community is active on various platforms and has a strong culture of sharing and collaboration:</p>
                        <ul>
                            <li><strong>Forums and Websites</strong>: Sites like speedrun.com provide leaderboards and forums for discussion.</li>
                            <li><strong>Twitch and YouTube</strong>: Key platforms for streaming and watching speedruns.</li>
                            <li><strong>Charity Events</strong>: Events like AGDQ raise millions for charity and showcase top speedrunners.</li>
                        </ul>

                        <h5>Techniques and Strategies</h5>
                        <ul>
                            <li><strong>Route Planning</strong>: Determining the most efficient path through the game.</li>
                            <li><strong>Glitch Exploitation</strong>: Using bugs in the game to skip parts or move faster.</li>
                            <li><strong>Frame-Perfect Execution</strong>: Performing actions with precise timing for advantage.</li>
                            <li><strong>Practice and Patience</strong>: Extensive practice to master a speedrun.</li>
                        </ul>

                        <h5>Future of Speedrunning</h5>
                        <p>The future looks bright, with new games, techniques, and a growing community. The evolution of technology and gaming will continue to offer new challenges and opportunities for speedrunners.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
