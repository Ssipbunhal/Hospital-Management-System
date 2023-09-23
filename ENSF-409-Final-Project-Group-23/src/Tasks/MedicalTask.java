package src.Tasks;

public class MedicalTask  extends ScheduledTask {
    private int maxWindow;


    public MedicalTask(String taskId, String description, String name) {
        super(taskId,description, 0, duration,name);
        this.maxWindow = maxWindow;
    }


    public int getMaxWindow() {
        return maxWindow;
    }

    public void setMaxWindow(int maxWindow) {
        this.maxWindow = maxWindow;
    }

    // public String getInitialDesc(String desc){
    //     return "* " + desc +" ( #names# )";
    // }
}

