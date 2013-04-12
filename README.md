PHPBro - The Rapid Brototyping PHP Framework
============================================

PHPBro is a revolutionary approach to web programming. It's designed for rapid application development where the only
limit is your imagination.

Features:
- Most static methods are stored in session for ease of access.
- Includes the powerful testing package, BroUnit, which works by refreshing each page ten times, then reporting test
  success if all error logs are clean.
- Incorporates the following Design Patterns: JSON Everywhere, Static Singleton, Globally-Defined (Universal Configuration) Constants, Looping SQL Queries
- Simple Logger (SLogger) - simple, clean logging built-in (just uncomment the code where you need help debugging)
- Event dispatching made easy with the Party Dispatcher component library. Brings all the parties to you, in your code.

Quick Start:
Most configuration options are already defined in the config.php. Just uncomment the global constant you want to use for 
the type of application you are building:
- IS_FACEBOOK_GAME
- IS_DAILY_DEAL_AGGREGRATOR
- IS_BLOG
