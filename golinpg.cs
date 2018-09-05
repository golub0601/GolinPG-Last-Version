using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Golinpg
{
    #region About_us
    public class About_us
    {
        #region Member Variables
        protected int _id;
        protected string _title;
        protected string _content;
        protected string _img_source;
        #endregion
        #region Constructors
        public About_us() { }
        public About_us(string title, string content, string img_source)
        {
            this._title=title;
            this._content=content;
            this._img_source=img_source;
        }
        #endregion
        #region Public Properties
        public virtual int Id
        {
            get {return _id;}
            set {_id=value;}
        }
        public virtual string Title
        {
            get {return _title;}
            set {_title=value;}
        }
        public virtual string Content
        {
            get {return _content;}
            set {_content=value;}
        }
        public virtual string Img_source
        {
            get {return _img_source;}
            set {_img_source=value;}
        }
        #endregion
    }
    #endregion
}using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Golinpg
{
    #region Admins
    public class Admins
    {
        #region Member Variables
        protected int _id;
        protected string _name;
        protected string _email;
        protected string _password;
        protected string _image;
        #endregion
        #region Constructors
        public Admins() { }
        public Admins(string name, string email, string password, string image)
        {
            this._name=name;
            this._email=email;
            this._password=password;
            this._image=image;
        }
        #endregion
        #region Public Properties
        public virtual int Id
        {
            get {return _id;}
            set {_id=value;}
        }
        public virtual string Name
        {
            get {return _name;}
            set {_name=value;}
        }
        public virtual string Email
        {
            get {return _email;}
            set {_email=value;}
        }
        public virtual string Password
        {
            get {return _password;}
            set {_password=value;}
        }
        public virtual string Image
        {
            get {return _image;}
            set {_image=value;}
        }
        #endregion
    }
    #endregion
}using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Golinpg
{
    #region Clients_imgs
    public class Clients_imgs
    {
        #region Member Variables
        protected int _id;
        protected string _company;
        protected string _image_source;
        #endregion
        #region Constructors
        public Clients_imgs() { }
        public Clients_imgs(string company, string image_source)
        {
            this._company=company;
            this._image_source=image_source;
        }
        #endregion
        #region Public Properties
        public virtual int Id
        {
            get {return _id;}
            set {_id=value;}
        }
        public virtual string Company
        {
            get {return _company;}
            set {_company=value;}
        }
        public virtual string Image_source
        {
            get {return _image_source;}
            set {_image_source=value;}
        }
        #endregion
    }
    #endregion
}using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Golinpg
{
    #region Imgs
    public class Imgs
    {
        #region Member Variables
        protected int _id;
        protected string _name;
        protected string _source;
        #endregion
        #region Constructors
        public Imgs() { }
        public Imgs(string name, string source)
        {
            this._name=name;
            this._source=source;
        }
        #endregion
        #region Public Properties
        public virtual int Id
        {
            get {return _id;}
            set {_id=value;}
        }
        public virtual string Name
        {
            get {return _name;}
            set {_name=value;}
        }
        public virtual string Source
        {
            get {return _source;}
            set {_source=value;}
        }
        #endregion
    }
    #endregion
}using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Golinpg
{
    #region Meetings
    public class Meetings
    {
        #region Member Variables
        protected int _id;
        protected string _name;
        protected string _company;
        protected string _email;
        protected string _phone_number;
        protected unknown _day;
        protected unknown _time_of;
        protected string _taken_by;
        #endregion
        #region Constructors
        public Meetings() { }
        public Meetings(string name, string company, string email, string phone_number, unknown day, unknown time_of, string taken_by)
        {
            this._name=name;
            this._company=company;
            this._email=email;
            this._phone_number=phone_number;
            this._day=day;
            this._time_of=time_of;
            this._taken_by=taken_by;
        }
        #endregion
        #region Public Properties
        public virtual int Id
        {
            get {return _id;}
            set {_id=value;}
        }
        public virtual string Name
        {
            get {return _name;}
            set {_name=value;}
        }
        public virtual string Company
        {
            get {return _company;}
            set {_company=value;}
        }
        public virtual string Email
        {
            get {return _email;}
            set {_email=value;}
        }
        public virtual string Phone_number
        {
            get {return _phone_number;}
            set {_phone_number=value;}
        }
        public virtual unknown Day
        {
            get {return _day;}
            set {_day=value;}
        }
        public virtual unknown Time_of
        {
            get {return _time_of;}
            set {_time_of=value;}
        }
        public virtual string Taken_by
        {
            get {return _taken_by;}
            set {_taken_by=value;}
        }
        #endregion
    }
    #endregion
}using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Golinpg
{
    #region Offices
    public class Offices
    {
        #region Member Variables
        protected int _id;
        protected string _city;
        protected string _image_source;
        #endregion
        #region Constructors
        public Offices() { }
        public Offices(string city, string image_source)
        {
            this._city=city;
            this._image_source=image_source;
        }
        #endregion
        #region Public Properties
        public virtual int Id
        {
            get {return _id;}
            set {_id=value;}
        }
        public virtual string City
        {
            get {return _city;}
            set {_city=value;}
        }
        public virtual string Image_source
        {
            get {return _image_source;}
            set {_image_source=value;}
        }
        #endregion
    }
    #endregion
}using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Golinpg
{
    #region Pr_and_em
    public class Pr_and_em
    {
        #region Member Variables
        protected int _id;
        protected string _title;
        protected string _content;
        protected string _image_source;
        #endregion
        #region Constructors
        public Pr_and_em() { }
        public Pr_and_em(string title, string content, string image_source)
        {
            this._title=title;
            this._content=content;
            this._image_source=image_source;
        }
        #endregion
        #region Public Properties
        public virtual int Id
        {
            get {return _id;}
            set {_id=value;}
        }
        public virtual string Title
        {
            get {return _title;}
            set {_title=value;}
        }
        public virtual string Content
        {
            get {return _content;}
            set {_content=value;}
        }
        public virtual string Image_source
        {
            get {return _image_source;}
            set {_image_source=value;}
        }
        #endregion
    }
    #endregion
}