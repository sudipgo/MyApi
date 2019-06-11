using System;
using System.Collections.Generic;
using System.Linq;
using System.Net;
using System.Net.Http;
using System.Web.Http;
using HartSystemApi.Models;

namespace HartSystemApi.Controllers
{
    public class ValuesController : ApiController
    {
        private IEnumerable<Menu> menuItems;
        public ValuesController()
        {
            menuItems = new List<Menu>
                {
                    new Menu
                    {
                        Id=1,ParentId=0,ReportType="Corp",Job=200
                    },
                    new Menu
                    {
                        Id=2,ParentId=0, ReportType="Store",Job=200
                    },
                    new Menu
                    {
                        Id=3,ParentId=1, ReportType = "ChainWideVariance",Job = 200
                    },
                    new Menu
                    {
                        Id=4,ParentId=1, ReportType = "Variance",Job = 200
                    },
                     new Menu
                    {
                        Id=5,ParentId=2, ReportType = "StickerSummary",Job = 200
                    },
                      new Menu
                    {
                        Id=6,ParentId=2, ReportType = "StickerDetail",Job = 200
                    }
                };

        }
        // GET api/values
        public IEnumerable<Menu> GetMenu()
        {
            return menuItems;
        }

        // GET api/values/5
        public IEnumerable<MainMenu> Get(string id)
        {
            var menus= menuItems.Where(m => m.Job == Convert.ToInt32(id)).Select(a => new MainMenu
            {
                Id = a.Id,
                Job = a.Job,
                ReportType = a.ReportType,
                ParentId = a.ParentId,
                subMenu = menuItems.Where(b => b.ParentId == a.Id).ToList()
            });

            return menus.Where(a=>a.ParentId==0);
        }

        // POST api/values
        public void Post([FromBody]string value)
        {
        }

        // PUT api/values/5
        public void Put(int id, [FromBody]string value)
        {
        }

        // DELETE api/values/5
        public void Delete(int id)
        {
        }
    }
}
