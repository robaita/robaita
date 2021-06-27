<!DOCTYPE html>
<html lang="en">
<?php include 'header.php';?>
            <div id="main">

                <div id="publications" class="page">
                    <div class="page-container">
                        <div class="pageheader">
                            <div class="headercontent">
                                <div class="section-container">

                                    <h2 class="title">Publications</h2>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p align="justify"><font size="4"> Please click <a href="downloads/Publications.pdf" target="_blank"> here</a> to download the publication list in pdf file.</font></p>
                                        </div>
                                        </div>

                                </div>
                            </div>
                        </div>

                        <div class="pagecontents">

                            <div class="section color-1" id="filters">
                                <div class="section-container">
                                    <div class="row">

                                        <div class="col-md-3">
                                            <h3>Filter by type:</h3>
                                        </div>
                                        <div class="col-md-6">
                                            <select id="cd-dropdown" name="cd-dropdown" class="cd-select">
                                                <option class="filter" value="all" selected>All types</option>
                                                <option class="filter" value="thesis">Theses</option>
                                                <option class="filter" value="jpaper">Jounal Papers</option>
                                                <option class="filter" value="cpaper">Conference Papers</option>
                                                <option class="filter" value="upaper">Unreviewed Papers</option>
                                                <option class="filter" value="spaper">Submitted Papers</option>
                                               <!-- <option class="filter" value="bookchapter">Book Chapters</option>
                                                <option class="filter" value="book">Books</option>
                                                <option class="filter" value="report">Reports</option>
                                                <option class="filter" value="tpaper">Technical Papers</option> -->
                                            </select>
                                        </div>

                                        <div class="col-md-3" id="sort">
                                            <span>Sort by year:</span>
                                            <div class="btn-group pull-right">

                                                <button type="button" data-sort="data-year" data-order="desc" class="sort btn btn-default"><i class="fa fa-sort-numeric-asc"></i></button>
                                                <button type="button" data-sort="data-year" data-order="asc" class="sort btn btn-default"><i class="fa fa-sort-numeric-desc"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="section color-2" id="pub-grid">
                                <div class="section-container">

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="pitems">
<!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

                                                <div class="item mix spaper" data-year="2019">
                                                    <div class="pubmain">
                                                    <div class="pubassets">
                                                            <a href="#" class="pubcollapse">
                                                                <i class="fa fa-expand"></i>
                                                            </a>
                                                            <a href="https://link.springer.com/article/10.1007/s13042-017-0699-z" class="tooltips" title="External link" target="_blank">
                                                                <i class="fa fa-external-link"></i>
                                                            </a>
                                                            <a href="downloads/VP_rough.pdf" class="tooltips" title="Download" target="_blank">
                                                                <i class="fa fa-cloud-download"></i>
                                                            </a>
                                                    </div>

                                                        <h4 class="pubtitle">
                                                        A rough set based reasoning approach for criminal identification
                                                        </h4>
                                                        <div class="pubauthor"><strong>Avinash Kumar Singh</strong>  Neha Baranwal, and Prof. G C Nandi</div>
                                                         <div class="pubcite"><span class="label label-success">Journal Paper</span> International Journal of Machine Learning and Cybernetics (2019), VOL.10, Issue.3, pp.413–431.
                                                         </div>
                                                         <div class="pubdetails">
                                                        <h4>Abstract</h4>
                                                        <p align="justify">As a supplement to mugshot detection, a new
                                                        approach is proposed to capture the eyewitness’s visual perception in the form of symbolic representation. It reveals
                                                        physiological and facial characteristics of criminal which
                                                        help in their identification. A rough set theory based technique is introduced to model those symbolic representations. This approach provides an intuitive insight to process
                                                        criminal’s imprecise and imperfect knowledge. We used a
                                                        benchmark mug-shot dataset consisting of 300 criminals
                                                        faces from the Chinese University of Hong Kong (CUHK)
                                                        to study the correctness of our proposed model. We took
                                                        the help of 105 students of Indian Institute of Information
                                                        Technology, Allahabad, who were treated as eyewitness
                                                        to depict the visual perception about 300 criminal faces of
                                                        CUHK. The experimental verification is composed of two
                                                        modes which are analogous to viewed sketches and forensic sketches. Like viewed sketches we have generated test
                                                        case-I, where perception is given while looking at the photo
                                                        whereas test case-II is like the forensic sketches where the
                                                        description is given by recalling the memory. We have
                                                        achieved encouraging results on the viewed sketch database
                                                        as well as forensic sketch database.</p>
                                                        </div>
                                                    </div>
                                                    </div>

<!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

                                                <div class="item mix spaper" data-year="2017">
                                                    <div class="pubmain">
                                                    <div class="pubassets">
                                                            <a href="#" class="pubcollapse">
                                                                <i class="fa fa-expand"></i>
                                                            </a>
                                                            <a href="https://www.tandfonline.com/doi/full/10.1080/0952813X.2015.1132266" class="tooltips" title="External link" target="_blank">
                                                                <i class="fa fa-external-link"></i>
                                                            </a>
                                                            <a href="downloads/VP_query.pdf" class="tooltips" title="Download" target="_blank">
                                                                <i class="fa fa-cloud-download"></i>
                                                            </a>
                                                    </div>

                                                        <h4 class="pubtitle">
                                                        Visual Perception based Criminal Identification- a rough set based reasoning approach
                                                        </h4>
                                                        <div class="pubauthor"><strong>Avinash Kumar Singh</strong> and Prof. G C Nandi</div>
                                                         <div class="pubcite"><span class="label label-success">Journal Paper</span> Journal of Experimental & Theoretical Artificial Intelligence (2017), VOL.29, NO.1, pp.175–196.
                                                         </div>
                                                         <div class="pubdetails">
                                                        <h4>Abstract</h4>
                                                        <p align="justify">The visual perception of eyewitness plays a vital role in criminal identification
                                                        scenario. It helps law enforcement authorities in searching particular criminal
                                                        from their previous record. It has been reported that searching a criminal
                                                        record manually requires too much time to get the accurate result. We have
                                                        proposed a query-based approach which minimises the computational
                                                        cost along with the reduction of search space. A symbolic database has
                                                        been created to perform a stringent analysis on 150 public (Bollywood
                                                        celebrities and Indian cricketers) and 90 local faces (our data-set). An expert
                                                        knowledge has been captured to encapsulate every criminal’s anatomical
                                                        and facial attributes in the form of symbolic representation. A fast querybased searching strategy has been implemented using dynamic decision
                                                        tree data structure which allows four levels of decomposition to fetch
                                                        respective criminal records. Two types of case studies - viewed and forensic
                                                        sketches have been considered to evaluate the strength of our proposed
                                                        approach. We have derived 1200 views of the entire population by taking
                                                        into consideration 80 participants as eyewitness. The system demonstrates
                                                        an accuracy level of 98.6% for test case I and 97.8% for test case II. It has also
                                                        been reported that experimental results reduce the search space up to 30
                                                        most relevant records.</p>
                                                        </div>
                                                    </div>
                                                    </div>

<!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

                                                <div class="item mix jpaper" data-year="2016">
                                                    <div class="pubmain">
                                                        <div class="pubassets">
                                                            <a href="#" class="pubcollapse">
                                                                <i class="fa fa-expand"></i>
                                                            </a>
                                                            <a href="http://www.sciencedirect.com/science/article/pii/S0921889016000166" class="tooltips" title="External link" target="_blank">
                                                                <i class="fa fa-external-link"></i>
                                                            </a>
                                                            <a href="downloads/Nao.pdf" class="tooltips" title="Download" target="_blank">
                                                                <i class="fa fa-cloud-download"></i>
                                                            </a>
                                                        </div>

                                                        <h4 class="pubtitle">
                                                        NAO humanoid robot: Analysis of calibration techniques for robot sketch drawing
                                                        </h4>
                                                        <div class="pubauthor"><strong>Avinash Kumar Singh</strong> and Prof. G C Nandi</div>
                                                        <div class="pubcite"><span class="label label-success">Journal Paper</span> Robotics and Autonomous Systems (2016), Vol. 79, pp. 108-121</div>
                                                    </div>
                                                    <div class="pubdetails">
                                                        <h4>Abstract</h4>
                                                        <p align="justify">The strength of the NAO humanoid robot is discussed with several challenges in the arena of human portrait and sketch drawing. These challenges include extracting feature points from the input image, defining these points with respect to end effector, finding the inverse kinematics solution and designing a visual feedback system. This paper mainly addresses the fundamental issue of defining a relationship between the points of the image plane and NAO end effector position. This relationship enables NAO to perceive points of image plane with respect to its body coordinate system. Three different techniques based on the principles of fundamental matrix, pseudo inverse and Artificial Neural Network based regression analysis are applied to handle the calibration difficulties on NAO robot. A comprehensive study on sample points collected from NAO end effector position and corresponding image points has been made to understand the effectiveness of each technique. The degree of performance ability of each technique has been measured using time complexity, and mean square error metrics.</p>
                                                    </div>
                                                </div>

<!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
                                                <div class="item mix jpaper" data-year="2016">
                                                    <div class="pubmain">
                                                        <div class="pubassets">
                                                            <a href="#" class="pubcollapse">
                                                                <i class="fa fa-expand"></i>
                                                            </a>
                                                            <a href="http://www.tandfonline.com/doi/abs/10.1080/0952813X.2015.1132266" class="tooltips" title="External link" target="_blank">
                                                                <i class="fa fa-external-link"></i>
                                                            </a>
                                                            <a href="downloads/Criminal.pdf" class="tooltips" title="Download" target="_blank">
                                                                <i class="fa fa-cloud-download"></i>
                                                            </a>
                                                        </div>
                                                        <h4 class="pubtitle">
                                                           Visual perception-based criminal identification: a query-based approach
                                                        </h4>
                                                        <div class="pubauthor"> <strong>Avinash Kumar Singh</strong> and Prof. G C Nandi</div>
                                                        <div class="pubcite">
                                                            <span class="label label-success">Journal Paper</span> Experimental & Theoretical Artificial Intelligence (2016), DOI:10.1080/0952813X.2015.1132266
                                                        </div>
                                                    </div>
                                                    <div class="pubdetails">
                                                    <h4>Abstract</h4>
                                                    <p align="justify">The visual perception of eyewitness plays a vital role in criminal identification scenario. It helps law enforcement authorities in searching particular criminal from their previous record. It has been reported that searching a criminal record manually requires too much time to get the accurate result. We have proposed a query-based approach which minimises the computational cost along with the reduction of search space. A symbolic database has been created to perform a stringent analysis on 150 public (Bollywood celebrities and Indian cricketers) and 90 local faces (our data-set). An expert knowledge has been captured to encapsulate every criminal’s anatomical and facial attributes in the form of symbolic representation. A fast query-based searching strategy has been implemented using dynamic decision tree data structure which allows four levels of decomposition to fetch respective criminal records. Two types of case studies - viewed and forensic sketches have been considered to evaluate the strength of our proposed approach. We have derived 1200 views of the entire population by taking into consideration 80 participants as eyewitness. The system demonstrates an accuracy level of 98.6% for test case I and 97.8% for test case II. It has also been reported that experimental results reduce the search space up to 30 most relevant records.</p>

                                                    </div>
                                                </div>
<!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
                                                <div class="item mix cpaper" data-year="2015">
                                                    <div class="pubmain">
                                                        <div class="pubassets">
                                                            <a href="#" class="pubcollapse">
                                                                <i class="fa fa-expand"></i>
                                                            </a>
                                                            <a href="http://ieeexplore.ieee.org/xpl/articleDetails.jsp?arnumber=7373001" class="tooltips" title="External link" target="_blank">
                                                                <i class="fa fa-external-link"></i>
                                                            </a>
															<a href="downloads/Sketch.pdf" class="tooltips" title="Download" target="_blank">
                                                                <i class="fa fa-cloud-download"></i>
                                                            </a>
                                                        </div>
                                                        <h4 class="pubtitle">
                                                           Sketch drawing by NAO humanoid robot                                                  </h4>
                                                        <div class="pubauthor"> <strong>Avinash Kumar Singh</strong> and Prof. G C Nandi</div>
                                                        <div class="pubcite">
                                                            <span class="label label-warning">Conference Paper</span>TENCON 2015, PP. 93-104, IEEE
                                                        </div>
                                                    </div>
                                                    <div class="pubdetails">
                                                    <h4>Abstract</h4>
                                                        <p align="justify">This paper demonstrates the sketch drawing capability of NAO humanoid robot. Two redundant degrees of freedom elbow yaw (RElbowYaw) and wrist yaw (RWristYaw) of the right hand have been sacrificed because of their less contribution in drawing. The Denavit-Hartenberg (DH) parameters of the system has been defined in order to measure the working envelop of the right hand as well as to achieve the inverse kinematic solution. A linear transformation has been used to transform the image points with respect to real world coordinate system and novel 4 point calibration technique has been proposed to calibrate the real world coordinate system with respect to NAO end effector.</p>
                                                    </div>
                                                </div>
<!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
                                                <div class="item mix cpaper" data-year="2014">
                                                    <div class="pubmain">
                                                        <div class="pubassets">
                                                            <a href="#" class="pubcollapse">
                                                                <i class="fa fa-expand"></i>
                                                            </a>
                                                            <a href="http://ieeexplore.ieee.org/xpl/articleDetails.jsp?arnumber=7346678" class="tooltips" title="External link" target="_blank">
                                                                <i class="fa fa-external-link"></i>
                                                            </a>
															<a href="downloads/IC3.pdf" class="tooltips" title="Download" target="_blank">
                                                                <i class="fa fa-cloud-download"></i>
                                                            </a>
                                                        </div>
                                                        <h4 class="pubtitle">
                                                           Human perception based criminal identification through human robot interaction                                                 </h4>
                                                        <div class="pubauthor"> <strong>Avinash Kumar Singh</strong> and Prof. G C Nandi</div>
                                                        <div class="pubcite">
                                                            <span class="label label-warning">Conference Paper</span>Contemporary Computing (IC3), 2015, PP. 196 - 201, IEEE
                                                        </div>
                                                    </div>
                                                    <div class="pubdetails">
                                                    <h4>Abstract</h4>
                                                        <p align="justify">In India like many other countries, the crimes especially against women are rising. One of the many reasons perhaps is the low conviction rate. The initial stage of criminal investigation starts with the exploration of evidences and eyewitnesses. An eyewitness can act as a guide to trace out the suspect. Her/his perception about the suspect can be useful to identify the criminal. Based on the descriptions of the eyewitnesses normally a manual sketch is prepared and released in the Newspapers which most of the times is vague and ambiguous and hence ineffective. Therefore, a robotic framework has been proposed in this paper to help Police to identify criminals using the imprecise knowledge about the subject. The designed robotic system interacts with the eyewitness by asking several questions about the suspect such as age, height, her/his facial shape and size etc., and then making a guess about her/his face. A human face can be considered as the combination of various macro facial features such as eye. Eyebrows, face shape, lip shape, nose type etc. Although these features vary from person to person but their combination makes a human face unique. An experimental study on 113 Indian Bollywood celebrities, 37 Indian cricketers and 40 persons from Robotics and Artificial Intelligence Laboratory of Indian Institute of Technology Allahabad, India has been performed. The system is able to identify the criminal (here pseudo criminals) if it exists in the database. This system can be useful at the initial stage of investigation where we don't have any knowledge about the criminal.</p>
                                                    </div>
                                                </div>

<!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
                                                <div class="item mix cpaper" data-year="2014">
                                                    <div class="pubmain">
                                                        <div class="pubassets">
                                                            <a href="#" class="pubcollapse">
                                                                <i class="fa fa-expand"></i>
                                                            </a>
                                                            <a href="http://ieeexplore.ieee.org/xpl/articleDetails.jsp?arnumber=6884987" class="tooltips" title="External link" target="_blank">
                                                                <i class="fa fa-external-link"></i>
                                                            </a>
															<a href="downloads/Nao.pdf" class="tooltips" title="Download" target="_blank">
                                                                <i class="fa fa-cloud-download"></i>
                                                            </a>
                                                        </div>
                                                        <h4 class="pubtitle">
                                                           Expression invariant fragmented face recognition                                                 </h4>
                                                        <div class="pubauthor"><strong>Avinash Kumar Singh</strong> and Prof. G C Nandi</div>
                                                        <div class="pubcite">
                                                            <span class="label label-warning">Conference Paper</span>ICSPCT (2014), PP. 184 - 189, IEEE
                                                        </div>
                                                    </div>
                                                    <div class="pubdetails">
                                                    <h4>Abstract</h4>
                                                        <p align="justify">Fragmented face recognition suggests a new way to recognize human faces with most discriminative facial components such as: Eyes, Nose and Mouth. An experimental study has been performed on 360 different subjects which confirms that more than 80% features of the full face lies within these fragmented components. The framework intends to process each component independently in order to find its corresponding match score. Final score is obtained by calculating weighted majority voting (WMV) of each component matched score. Three different feature extraction techniques like Eigenfaces, Fisher-faces and Scale Invariant Feature Transform (SIFT) are applied on full faces and fragmented face database (ORL Dataset). It has been observed from the classification accuracy that the strength of local features (SIFT) leads to achieve an encouraging recognition rate for fragmented components whereas the global features (Eigenfaces, Fisherfaces) increases misclassification error rate. This selection of optimal subset of face minimizes the comparison time and it also retains the correct classification rate irrespective of changing in facial expression. A standard Japanese Female facial expression dataset (JAFFE) has been used to investigate the major impact on Fragmented feature components. we have obtained a promising classification accuracy of 98.7% with this proposed technique.</p>
                                                    </div>
                                                </div>
												
<!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
                                                <div class="item mix cpaper" data-year="2014">
                                                    <div class="pubmain">
                                                        <div class="pubassets">
                                                            <a href="#" class="pubcollapse">
                                                                <i class="fa fa-expand"></i>
                                                            </a>
                                                            <a href="http://ieeexplore.ieee.org/xpl/articleDetails.jsp?arnumber=6884911" class="tooltips" title="External link" target="_blank">
                                                                <i class="fa fa-external-link"></i>
                                                            </a>
															<a href="downloads/Spoofing.pdf" class="tooltips" title="Download" target="_blank">
                                                                <i class="fa fa-cloud-download"></i>
                                                            </a>
                                                        </div>
                                                        <h4 class="pubtitle">
                                                          Face recognition with liveness detection using eye and mouth movement                                                </h4>
                                                        <div class="pubauthor"><strong>Avinash Kumar Singh</strong> and Prof. G C Nandi</div>
                                                        <div class="pubcite">
                                                            <span class="label label-warning">Conference Paper</span>Conference Paper</span>ICSPCT (2014), PP. 592 - 597, IEEE
                                                        </div>
                                                    </div>
                                                    <div class="pubdetails">
                                                    <h4>Abstract</h4>
                                                        <p align="justify">The recent literature on face recognition technology discusses the issue of face spoofing which can bypass the authentication system by placing a photo/video/mask of the enrolled person in front of the camera. This problem could be minimized by detecting the liveness of the person. Therefore, in this paper, we propose a robust liveness detection scheme based on challenge and response method. The liveness module is added as extra layer of security before the face recognition module. The liveness module utilizes face macro features, especially eye and mouth movements in order to generate random challenges and observing the user's response on account of this. The reliability of liveness module is tested by placing different types of spoofing attacks with various means, like using photograph, videos, etc. In all, five types of attacks have been taken care of and prevented by our system. Experimental results show that system is able to detect the liveness when subjected to all these attacks except the eye & mouth imposter attack. This attack is able to bypass the liveness test but it creates massive changes in face structure. Therefore resultant unrecognized or misclassified by the face recognition module. An experimental test conducted on 65 persons on university of Essex face database confirms that removal of eye and nose components results 75% misclassification.</p>
                                                    </div>
                                                </div>
<!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
                                                <div class="item mix jpaper" data-year="2014">
                                                    <div class="pubmain">
                                                        <div class="pubassets">
                                                            <a href="#" class="pubcollapse">
                                                                <i class="fa fa-expand"></i>
                                                            </a>
                                                            <a href="http://www.inderscienceonline.com/doi/abs/10.1504/IJAPR.2014.068327" class="tooltips" title="External link" target="_blank">
                                                                <i class="fa fa-external-link"></i>
                                                            </a>
                                                            <a href="downloads/Nao.pdf" class="tooltips" title="Download" target="_blank">
                                                                <i class="fa fa-cloud-download"></i>
                                                            </a>
                                                        </div>
                                                        <h4 class="pubtitle">
                                                           Face liveness detection through face structure analysis                                                      </h4>
                                                        <div class="pubauthor"> <strong>Avinash Kumar Singh</strong>, Piyush Joshi and Prof. G C Nandi</div>
                                                        <div class="pubcite">
                                                            <span class="label label-success">Journal Paper</span>Applied Pattern Recognition (2014), Vol. 1, Issue. 4, PP. 338-360
                                                        </div>
                                                    </div>
                                                    <div class="pubdetails">
                                                    <h4>Abstract</h4>
                                                        <p align="justify">Liveness detection is a way to detect whether the person is live or not during submission of his/her biometric trait. It is mandatory in order to prevent face spoofing attacks. Therefore, in this paper, we proposed a robust face structure analysis mechanism to detect the liveness by exploiting face shape information. 3D structure/shape of the face is measured on the basis of disparity map between left and right image taken by stereoscopic vision. A gradient–based eight neighbour feature extraction technique has been proposed to extract unique features from these disparity images. It produces minimal computational cost by taking subset of the overall image. We have applied linear discriminant analysis (LDA), C–means algorithms on these features while principal component analysis (PCA) is applied on raw disparity images. We have achieved a recognition rate of 91.6%, 97.5% and 98.3% using PCA, LDA and C–means respectively, which strengthened the confidence of our proposed feature extraction technique.</p>
                                                    </div>
                                                </div>
<!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
                                                <div class="item mix cpaper" data-year="2013">
                                                    <div class="pubmain">
                                                        <div class="pubassets">
                                                            <a href="#" class="pubcollapse">
                                                                <i class="fa fa-expand"></i>
                                                            </a>
                                                            <a href="http://searchdl.org/index.php/book_series/view/941" class="tooltips" title="External link" target="_blank">
                                                                <i class="fa fa-external-link"></i>
                                                            </a>
															<a href="downloads/ICSIP11.pdf" class="tooltips" title="Download" target="_blank">
                                                                <i class="fa fa-cloud-download"></i>
                                                            </a>
                                                        </div>
                                                        <h4 class="pubtitle">
                                                           Development of a Fuzzy Expert System based Liveliness Detection for Biometric Authentication                                               </h4>
                                                        <div class="pubauthor"><strong>Avinash Kumar Singh</strong>, Piyush Joshi and Prof. G C Nandi</div>
                                                        <div class="pubcite">
                                                            <span class="label label-warning">Conference Paper</span>Elsevier India (2013), Vol. 4, PP. 96 - 103
                                                        </div>
                                                    </div>
                                                    <div class="pubdetails">
                                                    <h4>Abstract</h4>
                                                        <p align="justify">Liveliness detection acts as a safeguard against spoofing attacks. Most of the researchers used vision based techniques to detect liveliness of the user, but they are highly sensitive to illumination effects. Therefore it is very hard to design a system, which will work robustly under all circumstances. Literature shows that most of the research utilize eye blink or mouth movement to detect the liveliness, while the other group used face texture to distinguish between real and imposter. The classification results of all these approaches decrease drastically in variable light conditions. Hence in this paper we are introducing fuzzy expert system which is sufficient enough to handle most of the cases comes in real time. We have used two testing parameters, (a) under bad illumination and (b) less movement in eyes and mouth in case of real user to evaluate the performance of the system. The system is behaving well in all, while in first case its False Rejection Rate(FRR) is .28, and in second case its FRR is .4.</p>
                                                    </div>
                                                </div>
<!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
                                                <div class="item mix cpaper" data-year="2012">
                                                    <div class="pubmain">
                                                        <div class="pubassets">
                                                            <a href="#" class="pubcollapse">
                                                                <i class="fa fa-expand"></i>
                                                            </a>
                                                            <a href="http://www.sciencedirect.com/science/article/pii/S2212017312006512" class="tooltips" title="External link" target="_blank">
                                                                <i class="fa fa-external-link"></i>
                                                            </a>
															<a href="downloads/AES.pdf" class="tooltips" title="Download" target="_blank">
                                                                <i class="fa fa-cloud-download"></i>
                                                            </a>
                                                        </div>
                                                        <h4 class="pubtitle">
                                                           Inter Cipher Block Diffusion: A Novel Transformation for Proposed Parallel AES                                               </h4>
                                                        <div class="pubauthor">Shashank Srivastava, <strong>Avinash Kumar Singh</strong> and Prof. G C Nandi</div>
                                                        <div class="pubcite">
                                                            <span class="label label-warning">Conference Paper</span>ICCCS (2012), Vol. 6, PP. 872 - 879
                                                        </div>
                                                    </div>
                                                    <div class="pubdetails">
                                                    <h4>Abstract</h4>
                                                        <p align="justify">With the advent of parallel computing, real time processing of large data encryption and decryption seems to be possible. Among many encryption standards, AES has gained popularity due to its high security with low acceptable cost. In real life applications, AES uses AES-CTR and ASE-EBC mode of operation to perform parallel encryption and decryption for large size of data, but it creates an opportunity for an adversary to find out the pattern at block level.
In this paper, we propose a novel transformation for parallel AES which leads to significant performance improvement with providing adequate security. To provide security with parallelism, a group of four input sub blocks of size 128 bits are processed simultaneously for creating a group of four output blocks of the same size. In order to wipe out the pattern at block level, we performed inter-block diffusion by adding a round key with all the four sub blocks in specified manner at the end of each round of parallel AES. In addition, complexity analysis proves that the proposed parallel AES approach is about 400% faster than sequential AES.</p>
                                                    </div>
                                                </div>
<!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
                                                <div class="item mix cpaper" data-year="2012">
                                                    <div class="pubmain">
                                                        <div class="pubassets">
                                                            <a href="#" class="pubcollapse">
                                                                <i class="fa fa-expand"></i>
                                                            </a>
                                                            <a href="http://dl.acm.org/citation.cfm?id=2393279" class="tooltips" title="External link" target="_blank">
                                                                <i class="fa fa-external-link"></i>
                                                            </a>
															<a href="downloads/Nao.pdf" class="tooltips" title="Download" target="_blank">
                                                                <i class="fa fa-cloud-download"></i>
                                                            </a>
                                                        </div>
                                                        <h4 class="pubtitle">
                                                           Audio steganography using LSB encoding technique with increased capacity and bit error rate optimization                                               </h4>
                                                        <div class="pubauthor">Sangita Roy, <strong>Avinash Kumar Singh</strong> , Jyotirmayee Parida and Ashok Singh Sairam </div>
                                                        <div class="pubcite">
                                                            <span class="label label-warning">Conference Paper</span>CCSEIT (2012), PP. 372 - 376
                                                        </div>
                                                    </div>
                                                    <div class="pubdetails">
                                                    <h4>Abstract</h4>
                                                        <p align="justify">Staganography is the art and science of secret hiding. The secret message or plain text may be hidden in one various ways. The methods of cryptography render the message unintelligible to the outsider by various transformations of the text whereas the methods of steganography conceal the existence of the message. To conceal a secret message we need a wrapper or container as a host file. Different wrappers or host files or cover medium are used to hide the secret message e.g. image, audio, video, text. The work in this paper aims at enhancing the provision of audio steganography by introducing one LSB (Least Significant Bit) coding technique. We design a high bit rate LSB audio watermarking method that reduces embedding distortion of the host audio with increased capacity of secret text. By using standard and proposed algorithm, watermark bits are embedded into higher LSB layer, resulting in increased robustness against noise addition, which is limited by perceptual transparency.</p>
                                                    </div>
                                                </div>
<!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
                                                <div class="item mix cpaper" data-year="2012">
                                                    <div class="pubmain">
                                                        <div class="pubassets">
                                                            <a href="#" class="pubcollapse">
                                                                <i class="fa fa-expand"></i>
                                                            </a>
                                                            <a href="http://dl.acm.org/citation.cfm?id=2393308" class="tooltips" title="External link" target="_blank">
                                                                <i class="fa fa-external-link"></i>
                                                            </a>
															<a href="downloads/FS.pdf" class="tooltips" title="Download" target="_blank">
                                                                <i class="fa fa-cloud-download"></i>
                                                            </a>
                                                        </div>
                                                        <h4 class="pubtitle">
                                                           Face recognition using facial symmetry                                               </h4>
                                                        <div class="pubauthor"><strong>Avinash Kumar Singh</strong> and Prof. G C Nandi </div>
                                                        <div class="pubcite">
                                                            <span class="label label-warning">Conference Paper</span>CCSEIT (2012), PP. 550 - 554
                                                        </div>
                                                    </div>
                                                    <div class="pubdetails">
                                                    <h4>Abstract</h4>
                                                        <p align="justify">Face is the most frequently used biometric trait after fingerprint. Its applicability made it popular in different areas such as Human Robot Interaction (HRI), Security Authentication, and Surveillance to name a few. Face recognition concept is based on two major blocks, training and testing. Usually training is done offline while testing is performed in real time scenario. As the size of the database increases, the recognition rate (time taken by system to recognize) increases. The rate of recognition is directly proportional to the size of the database and the dimension of the images. Human faces have the vertical symmetry; hence we utilized this feature and proposed a half way face recognition approach. Experimental verification on both the full faces and the half faces shows that half faces are also sufficient for recognizing the person. For verifying the efficiency of the approach, we have applied PCA (Principle Component Analysis) on both, the full faces and half faces, and have found that in both the cases, accuracy is almost same. But the recognition rate of half faces is just the half of the full faces.</p>
                                                    </div>
                                                </div>
<!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
                                                <div class="item mix jpaper" data-year="2012">
                                                    <div class="pubmain">
                                                        <div class="pubassets">
                                                            <a href="#" class="pubcollapse">
                                                                <i class="fa fa-expand"></i>
                                                            </a>
                                                            <a href="http://search.proquest.com/openview/d83ccf10df824b523d4d6e732b6caa04/1?pq-origsite=gscholar" class="tooltips" title="External link" target="_blank">
                                                                <i class="fa fa-external-link"></i>
                                                            </a>
                                                            <a href="downloads/SQL-1.pdf" class="tooltips" title="Download" target="_blank">
                                                                <i class="fa fa-cloud-download"></i>
                                                            </a>
                                                        </div>
                                                        <h4 class="pubtitle">
                                                           A Novel Approach to Prevent SQL Injection Attack Using URL Filter                                                     </h4>
                                                        <div class="pubauthor"> Sangita Roy, <strong>Avinash Kumar Singh</strong> and Ashok Singh Sairam</div>
                                                        <div class="pubcite">
                                                            <span class="label label-success">Journal Paper</span>Innovation, Management and Technology (2012), Vol. 3, Issue. 5, PP. 499-502
                                                        </div>
                                                    </div>
                                                    <div class="pubdetails">
                                                    <h4>Abstract</h4>
                                                        <p align="justify">Web services are usually supported by a database at the backend while a frontend takes input from the user, construct SQL statements and access the database. SQL injection is a popular technique used by attackers to exploit unsanitized user input vulnerability by convincing the application to run SQL code that it was not intended to run. Validating all user inputs and checking for vulnerability can be tedious on the part of the programmer. In this work we propose a new approach to prevent SQL injection attack using URL filtering. URL filters are used to validate user input to web forms. In this approach a single filter can be used to validate input to several databases which makes our approach more scalable and efficient. We implement the filter using Java servlet and demonstrate its effectiveness. </p>
                                                    </div>
                                                </div>
<!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
                                                <div class="item mix cpaper" data-year="2012">
                                                    <div class="pubmain">
                                                        <div class="pubassets">
                                                            <a href="#" class="pubcollapse">
                                                                <i class="fa fa-expand"></i>
                                                            </a>
                                                            <a href="http://ieeexplore.ieee.org/xpl/articleDetails.jsp?arnumber=6194594" class="tooltips" title="External link" target="_blank">
                                                                <i class="fa fa-external-link"></i>
                                                            </a>
															<a href="downloads/FS.pdf" class="tooltips" title="Download" target="_blank">
                                                                <i class="fa fa-cloud-download"></i>
                                                            </a>
                                                        </div>
                                                        <h4 class="pubtitle">
                                                           A network based vulnerability scanner for detecting SQLI attacks in web applications                                              </h4>
                                                        <div class="pubauthor"><strong>Avinash Kumar Singh</strong> and Sangita Roy </div>
                                                        <div class="pubcite">
                                                            <span class="label label-warning">Conference Paper</span>RAIT (2012), PP. 585 - 590
                                                        </div>
                                                    </div>
                                                    <div class="pubdetails">
                                                    <h4>Abstract</h4>
                                                        <p align="justify">Today is the world of information era, where information is available on just our single click. Web applications are playing a magnificent role in this, every organizations are mapping their business from a room to the world with the help of these Web Apps. Web applications generally consist of a three tier architecture where database is in the third pole, which is the most valuable assets in any organization, as the adaptation of web applications are increases day by day, various attacks are possible against this. SQL injection is an attack in which an attacker directly compromises the database, that's why this is a most threatening attack. Various Vulnerability scanners has been proposed to deal with this, but none of them are able to detect SQLI completely, the existing tools have the accuracy ratio very less as well as they produce a high rate of false positive, apart from that all these tools take much time to scan. So here we are presenting a network based vulnerability scanner approach which provides a better coverage and with no false positive within a short span of time.</p>
                                                    </div>
                                                </div>
<!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
                                                <div class="item mix jpaper" data-year="2011">
                                                    <div class="pubmain">
                                                        <div class="pubassets">
                                                            <a href="#" class="pubcollapse">
                                                                <i class="fa fa-expand"></i>
                                                            </a>
                                                            <a href="http://search.proquest.com/openview/513801cc263aa83d2b1d0f6ad31cd2d6/1?pq-origsite=gscholar" class="tooltips" title="External link" target="_blank">
                                                                <i class="fa fa-external-link"></i>
                                                            </a>
                                                            <a href="downloads/SQL-2.pdf" class="tooltips" title="Download" target="_blank">
                                                                <i class="fa fa-cloud-download"></i>
                                                            </a>
                                                        </div>
                                                        <h4 class="pubtitle">
                                                           Detecting and Defeating SQL Injection Attacks                                                    </h4>
                                                        <div class="pubauthor"> Sangita Roy, <strong>Avinash Kumar Singh</strong> and Ashok Singh Sairam</div>
                                                        <div class="pubcite">
                                                            <span class="label label-success">Journal Paper</span>Information and Electronics Engineering (2011), Vol. 1, Issue. 1, PP. 38-46
                                                        </div>
                                                    </div>
                                                    <div class="pubdetails">
                                                    <h4>Abstract</h4>
                                                        <p align="justify">The increasing dependence on web applications have made them a natural target for attackers. Among these attacks SQL Injection Attacks (SQLIA) are the most prevalent. In this paper we propose a SQL injection vulnerability scanner that is light-weight, fast and has a low false positive rate. These scanners prove as a practical tool to discover the vulnerabilities in a web application as well as to test the efficiency of counter attack mechanisms. In the latter part of our work we propose a security mechanism to counter SQL Injection Attacks. Our security methodology is based on the design of a filter for the HTTP request send by clients or users and look for attack signatures. The proposed filter is generic in the sense that it can be used with any web application. Finally we test our proposed security mechanism using the vulnerability scanner developed by us as well as other well known scanners. The proposed security mechanism is able to counter all the vulnerabilities that were previously reported before the deployment of our security framework.  </p>
                                                    </div>
                                                </div>
<!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
                                                <div class="item mix cpaper" data-year="2011">
                                                    <div class="pubmain">
                                                        <div class="pubassets">
                                                            <a href="#" class="pubcollapse">
                                                                <i class="fa fa-expand"></i>
                                                            </a>
                                                            <a href="http://s3.amazonaws.com/academia.edu.documents/33983024/Analyzing_SQL_Meta_Characters_and_Preventing_SQL_Injection.pdf?AWSAccessKeyId=AKIAJ56TQJRTWSMTNPEA&Expires=1470560138&Signature=WKXrVyYMZo8L%2BpNHGMklJoXuUWo%3D&response-content-disposition=inline%3B%20filename%3DAnalyzing_SQL_Meta_Characters_and_Preven.pdf" class="tooltips" title="External link" target="_blank">
                                                                <i class="fa fa-external-link"></i>
                                                            </a>
															<a href="http://s3.amazonaws.com/academia.edu.documents/33983024/Analyzing_SQL_Meta_Characters_and_Preventing_SQL_Injection.pdf?AWSAccessKeyId=AKIAJ56TQJRTWSMTNPEA&Expires=1470560138&Signature=WKXrVyYMZo8L%2BpNHGMklJoXuUWo%3D&response-content-disposition=inline%3B%20filename%3DAnalyzing_SQL_Meta_Characters_and_Preven.pdf" class="tooltips" title="Download" target="_blank">
                                                                <i class="fa fa-cloud-download"></i>
                                                            </a>
                                                        </div>
                                                        <h4 class="pubtitle">
                                                           Analyzing SQL Meta characters and preventing SQL Injection attacks using meta filter                                              </h4>
                                                        <div class="pubauthor"><strong>Avinash Kumar Singh</strong> and Prof. G C Nandi </div>
                                                        <div class="pubcite">
                                                            <span class="label label-warning">Conference Paper</span>ICIEE (2011), PP. 167 - 170
                                                        </div>
                                                    </div>
                                                    <div class="pubdetails">
                                                    <h4>Abstract</h4>
                                                        <p align="justify">SQL injection attacks (SQLIA) are widely used in which an attacker crafts input to the application server to access or modify data on the database server. A common approach for an attacker to launch SQLIA is by modifying the input URL to contain partial SQL queries and trick the server into executing them. In this paper we first identify all those input patterns that can appear in the URL of an attack. Next we proposed to deploy a SQL Meta character filter that parses the input URL to detect attack patterns. The attack patterns are so chosen so that SQL Meta characters that appear in a legal input are not filtered out. We implement the filter using Java servlet and demonstrate its effectiveness. </p>
                                                    </div>
                                                </div>

<!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
                                                <div class="item mix thesis" data-year="2011">
                                                    <div class="pubmain">
                                                        <div class="pubassets">
                                                             </a>
                                                            <a href="downloads/Thesis.pdf" class="tooltips" title="Download" target="_blank">
                                                                <i class="fa fa-cloud-download"></i>
                                                            </a>
                                                        </div>
                                                        <h4 class="pubtitle">
                                                          Detection and Prevention of SQL Injection Attack in Web Application                                           </h4>
                                                        <div class="pubauthor"> <strong>Avinash Kumar Singh</strong></div>
                                                        <div class="pubcite">
                                                            <span class="label label-primary">Thesis</span>Master dissertation, KIIT University, Bhubaneswar, India, 2011
                                                        </div>
                                                    </div>
                                                </div>
<!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

<!-- Mirrored from rezasaei.me/publication.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 Aug 2016 17:17:05 GMT -->
</html>

