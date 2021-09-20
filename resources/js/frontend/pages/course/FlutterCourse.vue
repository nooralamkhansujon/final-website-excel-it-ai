<template>
    <section
        class="accordion-section clearfix mt-5 py-5"
        aria-label="Question Accordions"
    >
        <div class="row" style="text-align: center; padding-bottom: 50px">
            <h1>Flutter Course</h1>
            <h5>Home/Flutter Course</h5>
        </div>
    </section>
    <section
        class="accordion-section clearfix mt-3"
        aria-label="Question Accordions"
    >
        <div class="container">
            <h3 style="text-align: center">Frequently Asked Questions</h3>
            <br />
            <br />
            <!--  -->
            <div class="container">
                <div class="row"></div>
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="list-group">
                            <Accordian header="OOP">
                                <ul>
                                    <li>Class</li>
                                    <li>Method</li>
                                    <li>Data Member and Member Function</li>
                                    <li>Constructor and Destructor</li>
                                    <li>Inheritance</li>
                                    <li>Encapsulation</li>
                                    <li>Polymorphism</li>
                                    <li>Abstraction</li>
                                </ul>
                            </Accordian>
                            <Accordian
                                header="Brief of flutter and Code editor"
                            >
                                <ul>
                                    <li>Dart</li>
                                    <li>Android Studio</li>
                                </ul>
                            </Accordian>
                            <Accordian header="Widget">
                                <ul>
                                    <li>Material App</li>
                                    <li>Icons</li>
                                    <li>Theme and Styling</li>
                                    <li>Identity card</li>
                                </ul>
                            </Accordian>

                            <Accordian header="Responsive">
                                <ul>
                                    <li>Gesture Detector</li>
                                    <li>Flutter form and field</li>
                                    <li>Radio Button and Dropdown list</li>
                                </ul>
                            </Accordian>
                            <Accordian header="Responsive">
                                <ul>
                                    <li>Gesture Detector</li>
                                    <li>Flutter form and field</li>
                                    <li>Radio Button and Dropdown list</li>
                                </ul>
                            </Accordian>
                            <Accordian header="Responsive 2">
                                <ul>
                                    <li>Expanded widget</li>
                                    <li>Intension Action</li>
                                    <li>Dart Function</li>
                                    <li>Click and action</li>
                                    <li>Variable & Data type</li>
                                    <li>Stateful VS Stateless</li>
                                    <li>Randomize on action</li>
                                </ul>
                            </Accordian>

                            <Accordian header="Animation">
                                <ul>
                                    <li>Implicit and Explicit animations</li>
                                    <li>Hero animation</li>
                                </ul>
                            </Accordian>

                            <Accordian header="Authentication">
                                <ul>
                                    <li>Facebook,</li>
                                    <li>Gmail</li>
                                    <li>Facebook,</li>
                                    <li>Mobile Number</li>
                                </ul>
                            </Accordian>
                        </div>
                    </div>

                    <div class="col-12 col-md-6">
                        <div class="list-group">
                            <Accordian header="Practice Project">
                                <ul>
                                    <li>BMI Calculator</li>
                                </ul>
                            </Accordian>
                            <Accordian header="Saving Data">
                                <ul>
                                    <li>SQL Database</li>
                                    <li>Em</li>
                                    <li>Shared Preference</li>
                                    <li>Crud Operation</li>
                                </ul>
                            </Accordian>
                            <Accordian header="Flutter Networking">
                                <ul>
                                    <li>Http Package</li>
                                    <li>JSON Serialization</li>
                                </ul>
                            </Accordian>
                            <Accordian header="Permission">
                                <ul>
                                    <li>Camera</li>
                                    <li>Storage</li>
                                    <li>Contact</li>
                                    <li>Location</li>
                                </ul>
                            </Accordian>
                            <Accordian header="Permission">
                                <ul>
                                    <li>Camera</li>
                                    <li>Storage</li>
                                    <li>Contact</li>
                                    <li>Location</li>
                                </ul>
                            </Accordian>
                            <Accordian header="Firebase">
                                <ul>
                                    <li>Authentication</li>
                                    <li>Firebase Database</li>
                                    <li>Firebase Storage</li>
                                </ul>
                            </Accordian>
                            <Accordian header="Web View">
                                <ul>
                                    <li>Direct Webview</li>
                                    <li>URL Launcher</li>
                                </ul>
                            </Accordian>
                            <Accordian header="Extra">
                                <ul>
                                    <li>GPS</li>
                                    <li>Localization</li>
                                    <li>SMS Autofill</li>
                                    <li>Font</li>
                                    <li>Icons</li>
                                    <li>Audio</li>
                                    <li>Chatting App</li>
                                    <li>AWS</li>
                                    <li>MongoDB</li>
                                </ul>
                            </Accordian>

                            <Accordian header="Practice Live Project">
                                <ul>
                                    <li>Practice Live Project</li>
                                </ul>
                            </Accordian>
                        </div>
                        <br />
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
import Accordian from "./components/Accordian.vue";
export default {
    components: { Accordian },
};
</script>

<style scoped></style>
