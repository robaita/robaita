#include<stdio.h>
#include<cv.h>
#include <highgui.h>
IplImage *img2,*img;
char cstr[256],cstr1[256];
int p=1;
IplImage *outImg = 0;
void resizeImage(const IplImage *origImg, int newWidth, int newHeight)
{
    
    int origWidth;
    int origHeight;
    if (origImg) {
        origWidth = origImg->width;
        origHeight = origImg->height;
    }
    if (newWidth <= 0 || newHeight <= 0 || origImg == 0 || origWidth <= 0 || origHeight <= 0) {
        printf("ERROR in resizeImage: Bad desired image size of %dx%d\n.", newWidth, newHeight);
        exit(1);
    }

    // Scale the image to the new dimensions, even if the aspect ratio will be changed.
    outImg = cvCreateImage(cvSize(newWidth, newHeight), origImg->depth, origImg->nChannels);
    if (newWidth > origImg->width && newHeight > origImg->height) {
        // Make the image larger
        cvResetImageROI((IplImage*)origImg);
        cvResize(origImg, outImg, CV_INTER_LINEAR);    // CV_INTER_CUBIC or CV_INTER_LINEAR is good for enlarging
    }
    else {
        // Make the image smaller
        cvResetImageROI((IplImage*)origImg);
        cvResize(origImg, outImg, CV_INTER_AREA);    // CV_INTER_AREA is good for shrinking / decimation, but bad at enlarging.
    }

    
}

int main( int argc, char** argv ) {
//IplImage* img = cvLoadImage( argv[1] );
//cvNamedWindow( "Example1", CV_WINDOW_AUTOSIZE );
IplImage* frame=0;
 CvCapture* video=0;
 video = cvCreateCameraCapture(-1);
 if(!video)
 {
  printf("\nCamera Initialization Failed.............");
 }
 cvNamedWindow("Display",CV_WINDOW_AUTOSIZE);
 
 while(1)
 {
  frame=cvQueryFrame(video);
   if(!frame) break;
 
  cvShowImage("Display",frame);
  char ch=cvWaitKey(30);
  if(ch==27) break;
 
 //cvResetImageROI(frame);

img = cvCreateImage(cvGetSize(frame),
                               frame->depth,
                               frame->nChannels);
cvCopy(frame, img, NULL);


CvMemStorage* storage = cvCreateMemStorage(0);
CvHaarClassifierCascade*  cascade ;
  char* file = "haarcascade_frontalface_alt_tree.xml";
    cascade = (CvHaarClassifierCascade*) cvLoad(file, 0, 0, 0);


///face detection

CvSeq* faces = cvHaarDetectObjects(
    frame,
    cascade,
    storage,
    1.1,
    5,
    CV_HAAR_DO_CANNY_PRUNING,
    cvSize(20, 20)
  );


  int i;
CvRect* r;
  /* Draw red boxes on the faces found */
  for( i = 0; i < (faces ? faces->total : 0); i++ ) {
     r = (CvRect*)cvGetSeqElem(faces, i);

    cvRectangle(
      frame,
      cvPoint(r->x, r->y),
      cvPoint(r->x + r->width, r->y + r->height),
      CV_RGB(255, 0, 0),
      1, 8, 0
    );
  }


cvSetImageROI(img, cvRect(r->x , r->y, r->width, r->height));


img2 = cvCreateImage(cvGetSize(img),
                               img->depth,
                               img->nChannels);

cvCopy(img, img2, NULL);


resizeImage(img2, 200, 200);


cvShowImage( "Example1", outImg);
 snprintf(cstr, sizeof(cstr)-1, "%d.png",  p); 
      cvSaveImage(cstr,outImg);
p++;
}


 cvReleaseCapture(&video);
 cvDestroyWindow("Display");
cvReleaseImage( &frame );
cvDestroyWindow( "Example1" );
}