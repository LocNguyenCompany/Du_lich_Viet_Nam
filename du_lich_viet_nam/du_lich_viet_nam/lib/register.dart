import 'package:flutter/material.dart';

class SignupPage extends StatefulWidget {
  SignupPage({Key? key}) : super(key: key);

  @override
  _SignupPageState createState() => _SignupPageState();
}

class _SignupPageState extends State<SignupPage> {
  final _emailController = TextEditingController();
  final _passwordController = TextEditingController();
  final _phoneController = TextEditingController();
  final _nameController = TextEditingController();
  final _birthdayController = TextEditingController();
  final _sexController = TextEditingController();
  final _avtController = TextEditingController();
  bool _clickEye = true;
  void _toggle() {
    setState(() {
      _clickEye = !_clickEye;
    });
  }

  @override
  Widget build(BuildContext context) {
    return Scaffold(
        body: ListView(
      children: [
        Container(
          // ignore: prefer_const_constructors
          decoration: BoxDecoration(
            // ignore: prefer_const_constructors
            image: DecorationImage(
              // ignore: prefer_const_constructors
              image: AssetImage("assets/img/background.jpg"),
              fit: BoxFit.cover,
            ),
          ),
          child: Column(
            children: [
              Container(
                  margin: EdgeInsets.only(top: 80),
                  // ignore: prefer_const_constructors
                  child: Text(
                    "Đăng kí",
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
                margin: EdgeInsets.all(10),
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
                      borderSide: BorderSide(color: Colors.black),
                    ),
                    // ignore: prefer_const_constructors
                    suffixIcon: Icon(Icons.email),
                  ),
                ),
              ),
              Container(
                margin: EdgeInsets.all(10),
                child: TextField(
                    controller: _passwordController,
                    obscureText: _clickEye,
                    textAlign: TextAlign.center,
                    decoration: InputDecoration(
                      filled: true,
                      fillColor: Colors.white,
                      hintText: "Password",
                      // ignore: prefer_const_constructors
                      border: OutlineInputBorder(
                        // ignore: prefer_const_constructors
                        borderSide: BorderSide(color: Colors.black),
                      ),
                      suffixIcon: IconButton(
                          onPressed: _toggle,
                          icon: Icon(_clickEye
                              ? Icons.visibility
                              : Icons.visibility_off)),
                    )),
              ),
              Container(
                // ignore: prefer_const_constructors
                margin: EdgeInsets.all(10),
                child: TextField(
                  controller: _phoneController,
                  textAlign: TextAlign.center,
                  // ignore: prefer_const_constructors
                  decoration: InputDecoration(
                    filled: true,
                    fillColor: Colors.white,
                    hintText: "Số điện thoại",
                    // ignore: prefer_const_constructors
                    border: OutlineInputBorder(
                      // ignore: prefer_const_constructors
                      borderSide: BorderSide(color: Colors.black),
                    ),
                    // ignore: prefer_const_constructors
                    suffixIcon: Icon(Icons.phone),
                  ),
                ),
              ),
              Container(
                // ignore: prefer_const_constructors
                margin: EdgeInsets.all(10),
                child: TextField(
                  controller: _nameController,
                  textAlign: TextAlign.center,
                  // ignore: prefer_const_constructors
                  decoration: InputDecoration(
                    filled: true,
                    fillColor: Colors.white,
                    hintText: "Họ tên",
                    // ignore: prefer_const_constructors
                    border: OutlineInputBorder(
                      // ignore: prefer_const_constructors
                      borderSide: BorderSide(color: Colors.black),
                    ),
                    // ignore: prefer_const_constructors
                    suffixIcon: Icon(Icons.account_box),
                  ),
                ),
              ),
              Container(
                // ignore: prefer_const_constructors
                margin: EdgeInsets.all(10),
                child: TextField(
                  controller: _birthdayController,
                  textAlign: TextAlign.center,
                  // ignore: prefer_const_constructors
                  decoration: InputDecoration(
                    filled: true,
                    fillColor: Colors.white,
                    hintText: "Ngày sinh",
                    // ignore: prefer_const_constructors
                    border: OutlineInputBorder(
                      // ignore: prefer_const_constructors
                      borderSide: BorderSide(color: Colors.black),
                    ),
                    // ignore: prefer_const_constructors
                    suffixIcon: Icon(Icons.calendar_today),
                  ),
                ),
              ),
              Container(
                // ignore: prefer_const_constructors
                margin: EdgeInsets.all(10),
                child: TextField(
                  controller: _sexController,
                  textAlign: TextAlign.center,
                  // ignore: prefer_const_constructors
                  decoration: InputDecoration(
                    filled: true,
                    fillColor: Colors.white,
                    hintText: "Giới tính",
                    // ignore: prefer_const_constructors
                    border: OutlineInputBorder(
                      // ignore: prefer_const_constructors
                      borderSide: BorderSide(color: Colors.black),
                    ),
                    // ignore: prefer_const_constructors
                    suffixIcon: Icon(Icons.arrow_drop_down_rounded),
                  ),
                ),
              ),
              Container(
                // ignore: prefer_const_constructors
                margin: EdgeInsets.all(10),
                child: TextField(
                  controller: _avtController,
                  textAlign: TextAlign.center,
                  // ignore: prefer_const_constructors
                  decoration: InputDecoration(
                    filled: true,
                    fillColor: Colors.white,
                    hintText: "Ảnh đại diện",
                    // ignore: prefer_const_constructors
                    border: OutlineInputBorder(
                      // ignore: prefer_const_constructors
                      borderSide: BorderSide(color: Colors.black),
                    ),
                    // ignore: prefer_const_constructors
                    suffixIcon: Icon(Icons.image),
                  ),
                ),
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
                        "Đăng kí",
                        style: TextStyle(color: Colors.amber, fontSize: 20),
                      ),
                      style: OutlinedButton.styleFrom(
                        backgroundColor: Colors.red.shade400,
                      )),
                ),
              ),
            ],
          ),
        ),
      ],
    ));
  }
}
