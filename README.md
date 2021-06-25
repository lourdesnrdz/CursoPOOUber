# CursoPOOUber
OOP course

## Table of contents

* [General info](#general-info) 
* [Technologies](#technologies) 
* [Setup](#setup)
* [Concepts](#concepts)

## General info

On this course I learned the basic concepts of Object Oriented Programming and how to implement them in Java, Python, JavaScript and PHP. For this implementation we analyzed Uber:
- Identified the actors that participate in a trip and their actions
- Pass this information to a UML diagram
    - We defined the attributes types
    - Identified where we could apply abstraction and inheritance, for example: uberX, uberPool, uberVan and uberBlack - they all belong to a class Car
    - Determine how each class interacts with one another
- Implement it on the different programming languages

## Technologies

On this course I used the following development technologies:
 - Visual Studio Code
 - Git
 - Github
 
Also, the following programming languages:
- Java
- Python
- Javascript
- PHP

## Setup

On VS Code add the following extensions for each programming language. 

### Java
For Java install the following extensions:
- Java Extension Pack
- Debugger for Java

### Python
1. Open the Command Palette (Ctrl+Shif+P)
2. Type Python: Select Interpleter, and select the command
3. Select the desired python interpreter

### PHP
Install the PHP Server extension.

## Concepts
On this section are some of the concepts seen throughout the course.

### Objects

Object: has properties and behaviors (methods), it can be physical or cenceptual.

Attribute: properties that describe and object.

Method: actions that an object can perform.

### Abstraction y Classes
Class: model based on the abstraction of an object

Abstraction: process in which we separate the characteristics of an object.

### Modularity

Modular: Divide a system and create independent modules.

Modularity allows us to:
- Reuse
- Avoid collapses
- Make maintainable code
- Readability
- Troubleshooting

### Inheritance
Inheritance allows us to create new classes from other classes. 
- A father (superclass) and son (subclass) relationship is established.

The abstraction allows us to generate a general class that contains the common elements of out subclasses. When a class inherits from another, this means that they acquire all the attributes and methods of the other class.

### Objects and the Constructor method

Object: is the instance of a class. It is the result of the parameters we declare in the class.

Constructor: it gives an initial state to the object. The data passed to the constructor will be the mimimum data for the object to exist.

### Encapsulation

Encapsulation: it is to make the data unalterable when an access modifier is assigned to it.

Access levels:
- Public: all classes.
- Protected: classes, packages and subclasses.
- Default: classes and internal packages.
- Private: class level.

### Polimorfism
Polimorfism: to construct methods with the same name but different behavior