// ReadVideo.cpp : Defines the entry point for the console application.
//Author: Avinash Kumar Singh
// Email:avinashkumarsingh1986@gmail.com
//Website:www.avinashkumarsingh.co.nr
// Build in: VS2010+Opencv2.4.9
//

#include "stdafx.h"
#include <opencv2/objdetect/objdetect.hpp>
#include <opencv2/highgui/highgui.hpp>
#include <opencv2/imgproc/imgproc.hpp>
//#include "core.hpp"
#include <opencv2/opencv.hpp>
#include <stdlib.h>
#include <iostream>
#include <stdio.h>
#include <fstream>
//#include "fstream.h"

  using namespace cv;
  using namespace std;

  int findBiggestContour(vector<vector<Point> >);

int _tmain(int argc, _TCHAR* argv[])
{
	try
	{

	namedWindow("Input Video",0);
	resizeWindow("Input Video",360,240);
	
	//create the cascade classifier object used for the face detection
    CascadeClassifier face_cascade;
    //use the haarcascade_frontalface_alt.xml library
    face_cascade.load("haarcascade_frontalface_alt.xml");
 
    //setup video capture device and link it to the first capture device
    //setup video capture device and link it to the first capture device
    //VideoCapture captureDevice;
    //captureDevice.open(0);
	VideoCapture cap("APJ.avi"); // open the video file for reading 

    if ( !cap.isOpened() )  // if not success, exit program
    {
         cout << "Cannot open the video file" << endl;
         return -1;
    }

    //cap.set(CV_CAP_PROP_POS_MSEC, 300); //start the video at 300ms

    double fps = cap.get(CV_CAP_PROP_FPS); //get the frames per seconds of the video

     cout << "Frame per seconds : " << fps << endl;

   
    //setup image files used in the capture process
    Mat captureFrame;
    Mat grayscaleFrame;
    Mat image_roi;
	Mat eye_roi;
	Mat eye_resized;
	Mat eyeBall; Mat eyeBall_BW;Mat LeftEye,RightEye;
    //create a window to present the results
    namedWindow("Input Video", 1);
	//namedWindow("Captured Eye", 1);
	//namedWindow("Temp Output", 1);
	//namedWindow("Log Window",1);
   // namedWindow("Log Scale",1);
    char fileName[50];
	int count=1;
	int isFace=0, save=0;
	int strt_val=0,end_val=0,F=0,S=0,Flag1=0,Flag2=0,Stop=0,C=0;
	int X_Loc, Y_Loc, X_Width, Y_Height;
	Mat G;Mat fg;
	 vector<vector<Point> > contours;
	 vector<Vec4i> hierarchy;
	  int largest_area=0;
				int largest_contour_index=0;
				Mat drawing;
    //create a loop to capture and find faces
    while(true)
    {
        //capture a new image frame
        Mat frame;

        bool bSuccess = cap.read(frame); // read a new frame from video

		if (!bSuccess) //if not success, break loop
		{
		cout << "Cannot read the frame from video file" << endl;
		//break;
		}
        
		captureFrame=frame;
		//transpose(captureFrame,captureFrame);
        //convert captured image to gray scale and equalize
        cvtColor(captureFrame, grayscaleFrame, CV_BGR2GRAY);
        equalizeHist(grayscaleFrame, grayscaleFrame);
 
        //create a vector array to store the face found
        std::vector<Rect> faces;
 
        //find faces and store them in the vector array
        face_cascade.detectMultiScale(grayscaleFrame, faces, 1.1, 3, CV_HAAR_FIND_BIGGEST_OBJECT|CV_HAAR_SCALE_IMAGE, Size(30,30));
		//cout<<faces.size()<<endl;
         
		if(faces.size())
		{
        //draw a rectangle for all found faces in the vector array on the original image
        for(int i = 0; i < faces.size(); i++)
        {
            isFace=1;
			Point pt1(faces[i].x + faces[i].width, faces[i].y + faces[i].height);
            Point pt2(faces[i].x, faces[i].y);
 
            rectangle(captureFrame, pt1, pt2, cvScalar(0, 255, 0, 0), 1, 8, 0);
			Rect region_of_interest = Rect(faces[i].x, faces[i].y, faces[i].width, faces[i].height);//Rect region_of_interest = Rect(x, y, w, h);
			image_roi = captureFrame(region_of_interest);
			resize( image_roi,image_roi, Size(300,300), 0, 0, INTER_CUBIC); // upscale 2x
			
			X_Loc=faces[i].x+ceil(faces[i].height*.1), Y_Loc=abs(faces[i].y)+ceil(faces[i].height*.2), X_Width= abs(faces[i].width*3/4), Y_Height=ceil(faces[i].height*.3);
			Rect eye_region = Rect(X_Loc,Y_Loc, X_Width,Y_Height); 
			//Rect eye_region = Rect(faces[i].x+30, faces[i].y+60, (faces[i].width)-60, (faces[i].height)/4);//Rect region_of_interest = Rect(x, y, w, h);
			eye_roi = captureFrame(eye_region);
			resize( eye_roi,eye_resized, Size(100,70), 0, 0,INTER_LANCZOS4); // upscale 2x  INTER_LANCZOS4
			
			
			X_Loc=faces[i].x+ceil(faces[i].height*.1), Y_Loc=abs(faces[i].y)+ceil(faces[i].height*.2), X_Width= abs(abs(faces[i].width*3/4)/2), Y_Height=ceil(faces[i].height*.3);
			Rect Lefteye_region = Rect(X_Loc,Y_Loc, X_Width,Y_Height); 
			LeftEye = captureFrame(Lefteye_region);
			resize(LeftEye,LeftEye, Size(50,70), 0, 0,INTER_LANCZOS4); // upscale 2x  INTER_LANCZOS4
			//imshow("LeftEye",LeftEye);

			X_Loc=(faces[i].x+ceil(faces[i].height*.1))+abs(abs(faces[i].width*3/4)/2), Y_Loc=abs(faces[i].y)+ceil(faces[i].height*.2), X_Width= abs(abs(faces[i].width*3/4)/2), Y_Height=ceil(faces[i].height*.3);
			Rect Righteye_region = Rect(X_Loc,Y_Loc, X_Width,Y_Height); 
			RightEye = captureFrame(Righteye_region);
			resize(RightEye,RightEye, Size(50,70), 0, 0,INTER_LANCZOS4); // upscale 2x  INTER_LANCZOS4
			//imshow("Right Eye",RightEye);
			//GaussianBlur( eye_resized,  G, Size (3,3), 100, 100);
			
			// Left Eye Processing 
					Mat GrayLeft;
					cvtColor(LeftEye,GrayLeft, CV_BGR2GRAY);
					equalizeHist(GrayLeft, GrayLeft);
			
					putText(image_roi, "Press 'S' to Save", cvPoint(10,30),FONT_HERSHEY_COMPLEX_SMALL, 0.8, cvScalar(200,100,250), 1, CV_AA);
					// Image Preprocessing
			   
						GrayLeft.convertTo(fg,CV_32F);
						fg = fg + 1;
						log(fg,fg);
					   convertScaleAbs(fg,fg);
					  normalize(fg,fg,0,255,cv::NORM_MINMAX);
					 // imshow("Temp Output 1",fg);

						 largest_area=0;
						 largest_contour_index=0;
				
						
						findContours( fg, contours, hierarchy, CV_RETR_TREE, CV_CHAIN_APPROX_SIMPLE, Point(0, 0) );
						 int LeftBall = findBiggestContour(contours);
						  if((contours[LeftBall].at(0).x >5) && (contours[LeftBall].at(0).y>10))
						   {
						 Mat drawing = Mat::zeros( fg.size(), CV_8UC1 );
						 findContours( fg, contours, hierarchy, CV_RETR_TREE, CV_CHAIN_APPROX_SIMPLE, Point(0, 0) );
						 drawContours( drawing, contours, LeftBall, Scalar(255), -1, 8, hierarchy, 0, Point() );
						// circle( eye_resized,contours[s].at(0),4, Scalar(255,0,0), 1, 8, 0 );
						 circle(LeftEye,contours[LeftBall].at(0),8, Scalar(0,255,0), 1, 8, 0 );
						//drawContours( drawing, contours, s-1, Scalar(255), -1, 8, hierarchy, 0, Point() );
						//circle(G,contours[s-1].at(0),8, Scalar(0,255,0), 1, 8, 0 );
						  }
						  int XLoc=contours[LeftBall].at(0).x;int YLoc=contours[LeftBall].at(0).y;
						 //cout<<XLoc<<", "<<YLoc<<endl;
						
						//imshow("Left Eye",LeftEye);
						 
				// Right Eye Processing

					Mat GrayRight;
					cvtColor(RightEye,GrayRight, CV_BGR2GRAY);
					equalizeHist(GrayRight, GrayRight);
			
					putText(image_roi, "Press 'S' to Save", cvPoint(10,30),FONT_HERSHEY_COMPLEX_SMALL, 0.8, cvScalar(200,100,250), 1, CV_AA);
					// Image Preprocessing
			   
						GrayRight.convertTo(fg,CV_32F);
						fg = fg + 1;
						log(fg,fg);
					   convertScaleAbs(fg,fg);
					  normalize(fg,fg,0,255,cv::NORM_MINMAX);
					//  imshow("Temp Output 2",fg);

						 largest_area=0;
						 largest_contour_index=0;
				
						
						findContours( fg, contours, hierarchy, CV_RETR_TREE, CV_CHAIN_APPROX_SIMPLE, Point(0, 0) );
						 int RightBall = findBiggestContour(contours);
						  if((contours[RightBall].at(0).x >5) && (contours[RightBall].at(0).y>10))
						   {
						 Mat drawing = Mat::zeros( fg.size(), CV_8UC1 );
						 findContours( fg, contours, hierarchy, CV_RETR_TREE, CV_CHAIN_APPROX_SIMPLE, Point(0, 0) );
						 drawContours( drawing, contours, RightBall, Scalar(255), -1, 8, hierarchy, 0, Point() );
						// circle( eye_resized,contours[s].at(0),4, Scalar(255,0,0), 1, 8, 0 );
						 circle(RightEye,contours[RightBall].at(0),8, Scalar(0,255,0), 1, 8, 0 );
						//drawContours( drawing, contours, s-1, Scalar(255), -1, 8, hierarchy, 0, Point() );
						//circle(G,contours[s-1].at(0),8, Scalar(0,255,0), 1, 8, 0 );
						  }
						// imshow("Right Eye",RightEye);
							
						 // cout<<"\nWidth"<<LeftEye.rows;
						  Mat canvas;
							 double sf;
							  int w, h;
							 // sf = 1;//600./MAX(imageSize.width, imageSize.height);
							  int width=LeftEye.cols;int height=LeftEye.rows;
							   w = cvRound(width);//LeftEye.width*sf
								h = cvRound(height); //imageSize.height*sf
							canvas.create(h, w*2, CV_8UC3);
							Mat canvasPart1 = canvas(Rect(0, 0, w, h)); 
							resize(LeftEye, canvasPart1, canvasPart1.size(), 0, 0, CV_INTER_AREA);
							Mat canvasPart2 = canvas(Rect(w, 0, w, h));     
							resize(RightEye, canvasPart2, canvasPart2.size(), 0, 0, CV_INTER_AREA);
							//Rect vroi1(cvRound(validRoi[0].x*sf), cvRound(validRoi[0].y*sf),cvRound(validRoi[0].width*sf), cvRound(validRoi[0].height*sf)); 
							imshow("Eye Region",canvas);
							
				  }

				
				}
			//imshow("Captured Eye",eye_roi);
			//imshow("Captured Eye",eye_resized);
			

			
			
		   imshow("Input Video", captureFrame); //show the frame in "MyVideo" window
		   if(waitKey(1) == 27) //wait for 'esc' key press for 30 ms. If 'esc' key is pressed, break loop
			{
			cout << "esc key is pressed by user" << endl;
			break; 
			}

		}
	}
	catch( cv::Exception& e )
	{
    const char* err_msg = e.what();
    std::cout << "exception caught: " << err_msg << std::endl;
	waitKey(0);
	}
	
	return 0;
}

int findBiggestContour(vector<vector<Point> > contours)
{
    
	int indexOfBiggestContour = -1;
    int sizeOfBiggestContour = 0;
    for (int i = 0; i < contours.size(); i++)
	{
        if(contours[i].size() > sizeOfBiggestContour)
		{
            sizeOfBiggestContour = contours[i].size();
            indexOfBiggestContour = i;
        }
		
		//cout<<"\n Center:="<<center[i];
    }
    
	return indexOfBiggestContour;
	
}