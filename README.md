# Tournament-Scoring-System-Project

You are a junior employee at a small software development company. Your company recently visited a local college and delivered a guest lecture. The college were pleased with the outcome of the visit and have asked your company to judge an upcoming tournament.

The college will be running a tournament for students to compete in a series of events for prizes. 
*	Participants may enter the tournament as individuals or as part of a team
*	It is expected that will be 4 teams each with 5 members and there will be 20 spaces for individual competitors
*	Each team or individual will complete 5 events
*	Each event will be defined as a team or individual event
*	The events will vary in type, from sporting to academic challenges
*	Individuals and teams will be awarded points according to their rank within each event
*	The points awarded for each event are as yet undecided and the college are willing to hear any suggestions you may have
*	Also the college would like to include the possibility of entering for one event only

You have been asked to design and develop a computer program to manage the scoring system for the tournament.

- Program Flow Pseudo Code

Welcome Page and Tournament Description
OUTPUT "Welcome to the College's Tournament Website"
OUTPUT "Description of the ongoing tournaments"

User Sign Up
INPUT name, email, password, college_id
// Store user data in database

// User Log In
INPUT email, password, college_id
// Check privileges: user, admin, super admin

// Forgot Password
IF user forgot password
    SEND email for verification

// Home Page Display
OUTPUT "Home Page with tournaments, images, and team rankings"

// Joining a Tournament
IF user decides to join a tournament
    IF individual
        IF user has not joined this tournament before
            SAVE user data in participants table
            REDUCE available events space by 1
            REDIRECT to events page to choose [1, 5] events
        ELSE
            OUTPUT "Apologizing message for already joining"

    IF team
        INPUT team member names, emails, college ids
        VALIDATE each member has not joined before
        IF all members are new
            SAVE team data in database
            SEND emails to team members about tournament joining
            REDIRECT to events page to choose [1, 5] events

// Joining Events
IF team
    JOIN team tournament event as leader
IF individual
    JOIN individual events

// Admin Login
IF user is an admin
    ACCESS user privileges
    PUT scores for specific events

// Super Admin Login
IF user is a super admin
    ACCESS user and admin privileges
    CRUD operations for admins and users on the website

// Event Deadline and Limits
SET deadline for each event
LIMIT team events to 5 teams
LIMIT individual events to 20 participants
