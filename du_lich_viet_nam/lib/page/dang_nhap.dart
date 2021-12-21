import 'package:flutter/material.dart';

class LoginPage extends StatefulWidget {
  LoginPage({Key? key}) : super(key: key);

  @override
  _LoginPageState createState() => _LoginPageState();
}

class _LoginPageState extends State<LoginPage> {
  final _emailController = TextEditingController();
  final _passwordController = TextEditingController();

  bool _clickEye = true;
  void _toggle() {
    setState(() {
      _clickEye = !_clickEye;
    });
  }

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      body: Container(
        // ignore: prefer_const_constructors
        decoration: BoxDecoration(
          // ignore: prefer_const_constructors
          image: DecorationImage(
            // ignore: prefer_const_constructors
            image: AssetImage("assets/img/background.jpg"),
            fit: BoxFit.cover,
          ),
        ),
        child: ListView(
          children: [
            Center(
              child: Column(
                children: [
                  Container(
                      margin: EdgeInsets.fromLTRB(20, 100, 20, 20),
                      // ignore: prefer_const_constructors
                      child: Text(
                        "Du lịch Việt Nam",
                        // ignore: prefer_const_constructors
                        style: TextStyle(
                          fontSize: 30,
                          fontWeight: FontWeight.bold,
                          fontFamily: "Lora",
                          color: Colors.red,
                        ),
                      )),
                  Container(
                    // ignore: prefer_const_constructors
                    margin: EdgeInsets.fromLTRB(20, 100, 20, 20),
                    child: TextField(
                      controller: _emailController,
                      textAlign: TextAlign.center,
                      // ignore: prefer_const_constructors
                      decoration: InputDecoration(
                          filled: true,
                          fillColor: Colors.white,
                          hintText: "Email",
                          // ignore: prefer_const_constructors
                          border: OutlineInputBorder(
                              // ignore: prefer_const_constructors
                              borderSide: BorderSide(color: Colors.black)),
                          // ignore: prefer_const_constructors
                          suffixIcon: Icon(Icons.email)),
                    ),
                  ),
                  Container(
                    // ignore: prefer_const_constructors
                    margin: EdgeInsets.fromLTRB(20, 50, 20, 20),
                    child: TextField(
                        controller: _passwordController,
                        obscureText: _clickEye,
                        textAlign: TextAlign.center,
                        // ignore: prefer_const_constructors
                        decoration: InputDecoration(
                          filled: true,
                          fillColor: Colors.white,
                          hintText: "Mật khẩu",
                          // ignore: prefer_const_constructors
                          border: OutlineInputBorder(
                              // ignore: prefer_const_constructors
                              borderSide: BorderSide(color: Colors.black)),
                          // ignore: prefer_const_constructors
                          suffixIcon: IconButton(
                              onPressed: _toggle,
                              icon: Icon(_clickEye
                                  ? Icons.visibility
                                  : Icons.visibility_off)),
                        )),
                  ),
                  Container(
                    margin: EdgeInsets.fromLTRB(20, 50, 20, 20),
                    child: SizedBox(
                      width: double.maxFinite,
                      // this is the height of TextField
                      child: OutlinedButton(
                          onPressed: () {
                            Navigator.pushNamed(context, '/Signup');
                          },
                          child: const Text(
                            "Đăng nhập",
                            style: TextStyle(color: Colors.amber, fontSize: 20),
                          ),
                          style: OutlinedButton.styleFrom(
                            backgroundColor: Colors.red.shade400,
                          )),
                    ),
                  ),
                ],
              ),
            )
          ],
        ),
      ),
    );
  }
}
