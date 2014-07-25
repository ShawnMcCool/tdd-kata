# TDD Kata

This repository is a PHP-based starter-kit for multiple TDD Kata.

> `composer install` will install PHPSpec and handle autoloading.

PHPSpec can be accessed at `bin/phpspec` from the root folder of the project.

## Why Kata?

The idea of the kata is that you're not thinking about how to solve the problem of the bowling game. But, rather you're memorizing the flow of building it using TDD. The problem is already solved, as you can see in the [attached document](https://github.com/ShawnMcCool/bowling-kata/raw/master/Bowling%20Game%20Kata.ppt). Each step is already defined. Simply memorize all of step one and do it until you have it mastered, then add another step. Once you can do the entire exercise out of memory, you'll be able to start reaping the benefits.

What are the benefits exactly? The kata (much like kata in Tae Kwon Do) are about repetition. Utilize your best IDE shortcuts, do everything in the best way possible. Repeat the exercise often and you'll **cement into your mind many small problem<->solution combinations**. In this way we can build the skills necessary to be able to apply TDD in increasing frequency in our work.

Just like you've probably learned to type QWERTY using poor form, learning another layout like DVORAK could give you the opportunity to type with better form. But that only works if you practice using EXCLUSIVELY good form. Do not consider this exercise if you're going to use poor form. Use your best, most powerful tools(IDE shortcut combinations, etc), and try to improve your execution of the kata every time you do it.

# Bowling Kata

> The following excerpt pulled directly from [http://butunclebob.com/ArticleS.UncleBob.TheBowlingGameKata](http://butunclebob.com/ArticleS.UncleBob.TheBowlingGameKata)

[Here is a kata](https://github.com/ShawnMcCool/bowling-kata/raw/master/Bowling%20Game%20Kata.ppt) for the Bowling Game problem. I have broken it down into the same tiny little steps that I do when I demonstrate it. However, as is usual for a kata, I have left out most of the explanatory comments.

A kata is meant to be memorized. Students of a kata study it as a form, not as a conclusion. It is not the conclusion of the kata that matters, it's the steps that lead to the conclusion. If you want to lean to think the way I think, to design the way I design, then you must learn to react to minutia the way I react. Following this form will help you to do that. As you learn the form, and repeat it, and repeat it, you will condition your mind and body to respond the way I respond to the minute factors that lead to design decisions.

Michael Feathers has long pondered the concept of "Design Sense". Good designers have a "sense" for design. They can convert a set of requirements into a design with little or not effort. It's as though their minds were wired to translate requirements to design. They can "feel" when a design is good or bad. They somehow intrinsically know which design alternatives to take at which point.

Perhaps the best way to acquire "Design Sense" is to find someone who has it, put your fingers on top of theirs, put your eyeballs right behind theirs, and follow along as they design something. Learning a kata may be one way of accomplishing this.

If you wish to try this style of learning, I suggest you proceed by memorizing it in short sections. Fully learn one section before adding the next. I have broken the kata up into five short sections. Learn each in order, and don't learn the next until you have mastered the previous. Move slowly and deliberately. DO NOT RUSH. A kata needs to seep into your bones, and this take time.

[Uncle Bob's kata document](kata/Bowling Game Kata.ppt) shows the steps of the kata.

[Watch Shawn McCool](https://www.youtube.com/watch?v=1-o1VAzOQiI) run through this exercise using PHPStorm and PHPSpec.

[Watch Kacper Gunia](https://www.youtube.com/watch?v=W-BuKLpUaR0) run through this exercise using PHPStorm and PHPSpec.

Here are the sections to memorize:

- The First Test
- The Second Test
- The Third Test
- The Fourth Test
- The Fifth Test

There is also a preamble section entitled "A Quick Design Session". This is part of the kata when demonstrating TDD to others, but is not part of the "Design Sense" of the kata itself.

# String Calculator Kata

> The follow exrcept is pulled directly from [Roy Osherove's blog](http://osherove.com/tdd-kata-1/).

The following is a TDD Kata- an exercise in coding, refactoring and test-first, that you should apply daily for at least 15 minutes (I do 30).

**Before you start:**
- Try not to read ahead.
- Do one task at a time. The trick is to learn to work incrementally.
- Make sure you only test for correct inputs. there is no need to test for invalid inputs for this kata

1. Create a simple String calculator with a method int Add(string numbers)
    - The method can take 0, 1 or 2 numbers, and will return their sum (for an empty string it will return 0) for example “” or “1” or “1,2”
    - Start with the simplest test case of an empty string and move to 1 and two numbers
    - Remember to solve things as simply as possible so that you force yourself to write tests you did not think about
    - Remember to refactor after each passing test
2. Allow the Add method to handle an unknown amount of numbers
3. Allow the Add method to handle new lines between numbers (instead of commas).
    - the following input is ok:  “1\n2,3”  (will equal 6)
    - the following input is NOT ok:  “1,\n” (not need to prove it - just clarifying)
4. Support different delimiters
    - to change a delimiter, the beginning of the string will contain a separate line that looks like this:   “//[delimiter]\n[numbers…]” for example “//;\n1;2” should return three where the default delimiter is ‘;’ .
    - the first line is optional. all existing scenarios should still be supported
5. Calling Add with a negative number will throw an exception “negatives not allowed” - and the negative that was passed.if there are multiple negatives, show all of them in the exception message

----
**stop here if you are a beginner. Continue if you can finish the steps so far in less than 30 minutes.**
----

6. Numbers bigger than 1000 should be ignored, so adding 2 + 1001  = 2
7. Delimiters can be of any length with the following format:  “//[delimiter]\n” for example: “//[***]\n1***2***3” should return 6
8. Allow multiple delimiters like this:  “//[delim1][delim2]\n” for example “//[*][%]\n1*2%3” should return 6.
9. make sure you can also handle multiple delimiters with length longer than one char
