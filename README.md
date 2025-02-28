# Exercice MVC
## Introduction
A simple exercise for my students to the different steps of developing a framework.

## Service Container
The service container is fairly easy to use. 
To declare a service:
```
$request = new \Helper\Request();
Container::register($request);
```
To get a service:
```
$request = Container::getService('HelperRequest');
```

## View
Views are stored in the View/ directory.
Views are rendered from Controllers.  
 
```
return $this->render("somepage.php");
```

## Helper\Router
Routes are declared in the `routes.json` file. See [Helper\Router info](./ROUTER.md)

## Helper\CLITableBuilder

See [Helper\CLITableBuilder info](./CLITABLEBUILDER.md)

## Helper\CLIShellColor

See [Helper\CLIShellColor info](./CLISHELLCOLOR.md)

## MIT License

Copyright (c) 2016 Yann Le Scouarnec

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
