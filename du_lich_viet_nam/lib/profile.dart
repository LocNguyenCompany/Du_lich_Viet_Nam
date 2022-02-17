import 'package:flutter/material.dart';

class ProfilePage extends StatefulWidget {
  Iterable info;
  ProfilePage({required this.info});

  @override
  _ProfilePageState createState() => _ProfilePageState();
}

class _ProfilePageState extends State<ProfilePage> {
  @override
  Widget build(BuildContext context) {
    return LayoutBuilder(
        builder: (BuildContext context, BoxConstraints constraints) {
      return Scaffold(
        body: SingleChildScrollView(
          child: Column(
            children: [
              Stack(
                children: [
                  Container(
                    height: 300,
                    width: 500,
                    color: Colors.white,
                  ),
                  Container(
                    height: 200,
                    width: 500,
                    child: Image.asset(
                      "assets/img/background.jpg",
                      fit: BoxFit.cover,
                    ),
                  ),
                  Positioned(
                    top: 150,
                    left: 350,
                    child: ClipRRect(
                      borderRadius: BorderRadius.all(Radius.circular(5)),
                      child: Container(
                        height: 30,
                        width: 50,
                        color: Colors.white,
                        child: Icon(Icons.camera_alt),
                      ),
                    ),
                  ),
                  Positioned(
                    top: 100,
                    left: 125,
                    child: CircleAvatar(
                      radius: 80,
                      backgroundColor: Colors.white,
                      child: CircleAvatar(
                        radius: 75,
                        backgroundImage:
                            AssetImage("assets/img/background.jpg"),
                      ),
                    ),
                  ),
                  Positioned(
                    top: 200,
                    left: 240,
                    child: CircleAvatar(
                      radius: 22,
                      backgroundColor: Colors.grey.shade300,
                      child: Icon(
                        Icons.camera_alt,
                        color: Colors.black,
                      ),
                    ),
                  )
                ],
              ),
              Text(
                widget.info.elementAt(0)['kq1']['Ho_ten'].toString(),
                style: TextStyle(
                    fontFamily: "Lora",
                    fontWeight: FontWeight.bold,
                    fontSize: 24),
              ),
              Text("Chuyên viên du lịch"),
              SizedBox(
                height: 15,
              ),
              Row(
                children: [
                  ClipRRect(
                    borderRadius: BorderRadius.all(Radius.circular(15)),
                    child: Container(
                      width: 300,
                      height: 50,
                      color: Colors.cyan,
                      child: Row(
                        mainAxisAlignment: MainAxisAlignment.spaceAround,
                        children: [
                          CircleAvatar(
                            backgroundColor: Colors.white,
                            radius: 15,
                            child: Icon(Icons.add),
                          ),
                          Text(
                            "Add to story",
                            style: TextStyle(color: Colors.white),
                          ),
                          SizedBox(
                            height: 15,
                          ),
                        ],
                      ),
                    ),
                  ),
                  SizedBox(
                    width: 10,
                  ),
                  ClipRRect(
                    borderRadius: BorderRadius.all(Radius.circular(15)),
                    child: Container(
                      width: 80,
                      height: 50,
                      color: Colors.grey.shade400,
                      child: Icon(Icons.menu),
                    ),
                  ),
                ],
              ),
              const SizedBox(
                height: 15,
              ),
              Divider(
                thickness: 1.5,
                color: Colors.grey.shade300,
              ),
              const SizedBox(
                height: 15,
              ),
              ListTile(
                leading: const Icon(Icons.email_outlined),
                title:
                    Text(widget.info.elementAt(0)['kq1']['Email'].toString()),
              ),
              ListTile(
                leading: const Icon(Icons.phone),
                title: Text(widget.info.elementAt(0)['kq1']['SDT'].toString()),
              ),
              const SizedBox(
                height: 15,
              ),
              Divider(
                thickness: 1.5,
                color: Colors.grey.shade300,
              ),
              ListView.builder(
                itemCount: 1,
                itemBuilder: (BuildContext context, int index) {
                  return Container(
                    margin: EdgeInsets.all(8),
                    padding: EdgeInsets.fromLTRB(0, 10, 0, 10),
                    constraints: BoxConstraints(
                        maxWidth: MediaQuery.of(context).size.width),
                    decoration: BoxDecoration(
                        border: Border.all(color: Colors.grey),
                        borderRadius: BorderRadius.all(Radius.circular(8)),
                        color: Colors.white,
                        boxShadow: [
                          BoxShadow(
                              blurRadius: 10,
                              color: Colors.black,
                              offset: Offset(5, 5))
                        ]),
                    child: Padding(
                      padding: const EdgeInsets.only(left: 10),
                      child: Column(
                        crossAxisAlignment: CrossAxisAlignment.start,
                        children: [
                          Text(
                            "",
                            style: TextStyle(
                                fontSize: 25, fontWeight: FontWeight.bold),
                          ),
                          Container(
                            padding: EdgeInsets.fromLTRB(0, 10, 10, 10),
                            child: Image.network(
                              "",
                              fit: BoxFit.fitWidth,
                              width: MediaQuery.of(context).size.width,
                            ),
                          ),
                          Text(
                            "baiviet",
                            style: TextStyle(fontSize: 20),
                          ),
                          Row(
                            mainAxisAlignment: MainAxisAlignment.spaceEvenly,
                            children: [
                              Row(
                                children: [
                                  Icon(Icons.thumb_up_alt_outlined),
                                  Padding(
                                    padding: const EdgeInsets.all(8.0),
                                    child: Text("10"),
                                  )
                                ],
                              ),
                              Row(
                                children: [
                                  Icon(Icons.thumb_down_alt_outlined),
                                  Padding(
                                    padding: const EdgeInsets.all(8.0),
                                    child: Text("10"),
                                  )
                                ],
                              ),
                              Icon(Icons.share_outlined),
                            ],
                          ),
                        ],
                      ),
                    ),
                  );
                },
              ),
            ],
          ),
        ),
      );
    });
  }
}
