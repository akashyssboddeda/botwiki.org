/*
Title: Tutorials for Slack Bots
Description: Learn how to make a Slack bot!
Thumbnail: /content/images/illustrations/marc-press-large.jpg
Tags: tutorials,slack
Show donation link: yes
Nav: hidden
*/


<div class="note">
  <p>
    Before you start making bots, consider reading <a href="/bot-ethics">these essays and articles</a>. Also worth browsing: <a href="/resources/libraries-frameworks/#language">resources for cleaning up your bot's language</a>.
  </p>
</div>

<p class="screenshot float-right">
  <a href="/bots/slackbots/slack-tableflip">
    <img src="/content/bots/slackbots/images/slack-tableflip.png">
  </a>
</p>


Learn how to make your own [Slack](https://slack.com/) bot with these tutorials and join us at [**Botmakers.org**](https://botmakers.org/) to share what you're working on, ask for advice or just chat with fellow [#botmakers](https://twitter.com/search?q=%23botmakers) and bot enthusiasts.


### [¶](#slack-api){.pilcrow} Selected API documentation {#slack-api}

- [Slack Developers](https://slack.com/developers)
- [Official Slack documentation](https://api.slack.com/bot-users)
- [Attachments](https://api.slack.com/docs/attachments): create more richly-formatted messages
- [Reminders](https://api.slack.com/methods#reminders): create and manage reminders for users
- [Threading messages together](https://api.slack.com/docs/message-threading)
- [Slack app unfurling](https://api.slack.com/docs/message-link-unfurling#slack_app_unfurling) ([announcements](https://medium.com/slack-developer-blog/all-will-be-revealed-ebcad7c531f0))

See also:

- [list of all API methods](https://api.slack.com/methods)
- [announcements of API changes](https://twitter.com/search?f=tweets&vertical=default&q=%23changelog%20from%3ASlackAPI) via [@SlackAPI](https://twitter.com/SlackAPI)
- [documentation of undocumented Slack API methods](https://github.com/ErikKalkoken/slackApiDoc)

### [¶](#beginner-tutorials){.pilcrow} Beginner tutorials {#beginner-tutorials}

#### [¶](#beginner-nodejs){.pilcrow} node.js {#beginner-nodejs}

- [Why did the chicken cross the road?](https://botwiki.org/tutorials/why-did-the-chicken-cross-the-road-slack-bot-tutorial/): Basic intro to Slack bots with with Botkit (uses OpenShift for hosting)
- [Botkit is better with Slack’s Events API](https://medium.com/slack-developer-blog/botkit-is-better-with-slacks-events-api-f9a27e051591): create a Slack app using Botkit and [Glitch](https://glitch.com) (Eric Soelzer via medium.com)
- [Getting Started with Slack Bots](http://www.sitepoint.com/getting-started-slack-bots/)
- [Easy-Peasy Bots: Getting Started](https://medium.com/slack-developer-blog/easy-peasy-bots-getting-started-96b65e6049bf) (with node.js and [Botkit](http://howdy.ai/botkit/))
- [Botkit is better with Slack’s Events API](https://medium.com/slack-developer-blog/botkit-is-better-with-slacks-events-api-f9a27e051591) (with node.js, Botkit, and [Glitch](https://glitch.com))
- [How to Build A Slackbot (with node.js) + Deploy an App to Heroku for Absolute Beginners](http://blog.npmjs.org/post/128237577345/how-to-build-a-slackbot-deploy-an-app-to-heroku)
- [Building an Intelligent Bot Using the Slack API](http://nordicapis.com/building-an-intelligent-bot-using-the-slack-api/): a great tutorial that uses node.js and [Wit.ai API](https://wit.ai/)
- [Say Hello To Your First Slackbot](http://devdactic.com/first-slackbot/): a tutorial by [devdactic.com](http://devdactic.com/)
- [How to write a Slackbot in 40 lines of code](https://medium.com/@mager/how-to-write-a-slackbot-in-40-lines-of-code-52cf0c4fcf42): with node.js and the [Genius API](https://docs.genius.com/)
- [Create a Slack Bot That Privately Greets New Users in 5 Easy Steps](https://medium.com/@izzydoesizzy/create-a-slack-bot-that-privately-greets-new-users-in-5-easy-steps-a38eabeabcb5)
- [Creating “ZoneBot” using the Microsoft Bot Framework and LUIS](https://medium.com/@ThisisZone/creating-zonebot-using-the-microsoft-bot-framework-and-luis-f88e7f34ba70) and [Adding a conversational UI to “Zonebot” with the Microsoft bot framework](https://medium.com/@ThisisZone/adding-a-conversational-ui-to-zonebot-with-the-microsoft-bot-framework-ed82e5df9d69)

#### [¶](#beginner-python){.pilcrow} Python {#beginner-python}

- [Hello PyBot - Python Chat Bots for Slack](https://www.youtube.com/watch?v=7jwwhk5W56A): a 20 minute talk by [Jeff Kramer](https://twitter.com/jeffk)
- [How to Build Your First Slack Bot with Python](https://www.fullstackpython.com/blog/build-first-slack-bot-python.html)
- [Slack bot with a Django backend — 101 tutorial](https://chatbotsmagazine.com/slack-bot-with-a-django-backend-101-tutorial-c1aa8ea3f15e)
- [Build a Slack Bot that Mimics Your Colleagues](http://hirelofty.com/blog/how-build-slack-bot-mimics-your-colleague/) (with [Markov chains](https://simple.wikipedia.org/wiki/Markov_chain))

#### [¶](#beginner-ruby){.pilcrow} Ruby {#beginner-ruby}

- [Building a Slackbot with Ruby and Sinatra](http://www.sitepoint.com/building-a-slackbot-with-ruby-and-sinatra/)


### [¶](#intermediate-tutorials){.pilcrow} Intermediate tutorials {#intermediate-tutorials}

- [Building a Pokebot](https://blog.recast.ai/nodejs-bot-tutorial-1/): A NodeJS chatbot tutorial by [Recast.AI](https://recast.ai/) ([Part 2](https://blog.recast.ai/nodejs-bot-tutorial/), [Part 3](https://blog.recast.ai/nodejs-bot-tutorial-3/))
- [How I Ruined Office Productivity With a Face-Replacing Slack Bot](http://blog.zikes.me/post/how-i-ruined-office-productivity-with-a-slack-bot/): tutorial with Go (blog.zikes.me)
- [Make a Self-Training, NLP-Driven Slack Bot](http://blog.templeton.host/self-training-nlp-enabled-slack-bot-tutorial/): "NLP + [Botkit](http://howdy.ai/botkit/) = Magic"
- [Hacker News bot with Slack’s Events API and StdLib](https://hackernoon.com/hacker-news-bot-with-slacks-events-api-and-stdlib-33e28cea1b18)
- [IBM Watson’s Personality Insights and Howdy.AI's Slackbot tutorial](https://medium.com/@ash_hathaway/ibm-watson-s-personality-insights-and-howdy-ai-s-slackbot-tutorial-be68da6cfa10): a tutorial using [Botkit](http://howdy.ai/botkit/)
- [Slack + SuperScript — Rise of the Bots](https://medium.com/@rob_ellis/slack-superscript-rise-of-the-bots-bba8506a043c)
- [Writing a Slack Bot Service for Multiple Teams](http://code.dblock.org/2015/11/14/writing-a-slack-bot-service-for-multiple-teams.html)
- [Building Slack bots with Botkit and Visual Studio Code](https://medium.com/@csinco/botkit-visual-studio-code-3252800048ba)
- [Serverless Slackbots Powered by AWS](http://eng.localytics.com/serverless-slackbots-powered-by-aws/)
- [Using Botkit and Aylien’s Text API to Make a Slack Bot](https://medium.com/@samhavens/building-somerset-d518ba284c49)
- [How to make a Slack bot speak Kubernetes](https://medium.com/@janetkuo/how-to-make-a-slack-bot-speak-kubernetes-e7929f51c741)
- [Slack meet Hue](https://joffcom.net/slack-meet-hue/) (joffcom.net)

For more tutorials, see [api.slack.com/tutorials](https://api.slack.com/tutorials).

### [¶](#general-tutorials){.pilcrow} General tutorials and articles {#general-tutorials}

- [State of the Slack Platform](https://blog.howdy.ai/talkabot-talks-state-of-the-slack-platform-amir-shevat-slack-1eee5b056e07) (blog.howdy.ai)
- [Hosting Slack Integrations](https://medium.com/slack-developer-blog/hosting-slack-integrations-79f3d4b04dd6)
- [3 Things We Learned Building a Chatbot for Slack](https://medium.com/@kipsearch/3-things-we-learned-building-a-chatbot-for-slack-2dc32321d77c): via [@kipsearch](https://twitter.com/kipsearch)
- [How We Use Bots in Slack at SparkPost](https://www.sparkpost.com/blog/using-slack-bots-sparkpost/)
- [Running Slack Bots on DigitalOcean with Dokku](http://code.dblock.org/2016/02/08/running-slack-bots-on-digital-ocean-with-dokku.html)

### [¶](#non-english-tutorials){.pilcrow} Non-English tutorials {#non-english-tutorials}

- [Botkit tutorial in Japanese](http://toach.click/2016/01/16/botkit-conversation/)


See also [Resources for Slack bots](/resources/slackbots) and [open source code for Slack bots](/tag/slack+opensource). You can also [browse all the Slack bots](/tag/slackbot) for inspiration.
