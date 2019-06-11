using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;

namespace HartSystemApi.Models
{
    public class Menu
    {
        public int Id { get; set; }
        public int Job { get; set; }
        public string ReportType { get; set; }
        public int ParentId  { get; set; }
    }

    public class MainMenu
    {
        public int Id { get; set; }
        public int Job { get; set; }
        public string ReportType { get; set; }
        public int ParentId { get; set; }
        public List<Menu> subMenu { get; set; }
    }

}